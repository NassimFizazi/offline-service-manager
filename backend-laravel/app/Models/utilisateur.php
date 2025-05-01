<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Utilisateur extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['nom', 'email', 'password', 'type'];

    public function services()
    {
        return $this->hasMany(Service::class, 'professionnel_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'client_id');
    }

    public function reclamations()
    {
        return $this->hasMany(Reclamation::class, 'client_id');
    }
}
