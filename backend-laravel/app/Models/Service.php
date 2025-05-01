<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'description', 'prix', 'statut', 'professionnel_id'];

    public function professionnel()
    {
        return $this->belongsTo(Utilisateur::class, 'professionnel_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
