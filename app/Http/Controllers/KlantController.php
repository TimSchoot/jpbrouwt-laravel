<?php

namespace App\Http\Controllers;

use App\Models\Klant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KlantController extends Controller
{
    public function store(Request $request)
    {
        // Valideer input
        $validated = $request->validate([
            'naam' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'straat_postcode' => 'required|string|max:255',
            'plaats' => 'required|string|max:255',
        ]);

        // Zoek hoogste klantnummer
        $latestNumber = Klant::max('klant_nummer'); // geeft null of hoogste nummer terug
        if ($latestNumber === null) {
            $newNumber = 1;
        } else {
            $newNumber = $latestNumber + 1;
        }

        // Formatteer naar 6 cijfers met voorloopnullen
        $formattedNumber = str_pad($newNumber, 6, '0', STR_PAD_LEFT);

        // Maak klant aan
        Klant::create([
            'klant_nummer'    => $newNumber,          // voor intern gebruik numeriek
            'naam'            => $validated['naam'],
            'email'           => $validated['email'],
            'straat_postcode' => $validated['straat_postcode'],
            'plaats'          => $validated['plaats'],
        ]);

        // Toon formatted number aan gebruiker
        return back()->with('success', 'Klant succesvol opgeslagen. Klantnummer: ' . $formattedNumber);
    }
    public function index()
    {
        $klanten = Klant::orderBy('klant_nummer', 'asc')->get();
        return view('klanten', compact('klanten'));
    }
}
