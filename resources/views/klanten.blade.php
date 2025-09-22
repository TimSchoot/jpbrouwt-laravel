@include('includes.header')

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<h1>Nieuwe klant toevoegen</h1>
<form action="{{ route('klant.store') }}" method="POST">
    @csrf
    <input type="text" name="naam" placeholder="Naam" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="straat_postcode" placeholder="Adres + postcode" required>
    <input type="text" name="plaats" placeholder="Plaats" required>
    <button type="submit">Verstuur</button>
</form>

<h2>Klantenlijst</h2>

<table>
    <thead>
        <tr>
            <th>Klantnummer</th>
            <th>Naam</th>
            <th>Email</th>
            <th>Adres + Postcode</th>
            <th>Plaats</th>
            <th>Aangemaakt op</th>
        </tr>
    </thead>
    <tbody>
        @foreach($klanten as $klant)
            <tr>
                <td>{{ str_pad($klant->klant_nummer, 6, '0', STR_PAD_LEFT) }}</td>
                <td>{{ $klant->naam }}</td>
                <td>{{ $klant->email }}</td>
                <td>{{ $klant->straat_postcode }}</td>
                <td>{{ $klant->plaats }}</td>
                <td>{{ $klant->created_at->format('d-m-Y H:i') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>