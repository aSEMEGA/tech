<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table="reservation"; 
    public $primaryKey = 'idv'; 
    public $incrementing = true; 
    protected $fillable = [ 
        'idv',
        'nom',
        'prenom',
        'sexe',
        'adresse',
        'telephone',
        'compagnie',
        'dateDepart',
        'heureDepart',
        'source',
        'destination',
        'montantBillet',
        'dateReservation' 
    ];
}
