<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Klant extends Model
{
    use HasFactory;
    protected $table = 'klanten';
    protected $fillable = ['klant_nummer','naam', 'email', 'straat_postcode', 'plaats'];
}

