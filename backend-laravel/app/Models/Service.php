<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['titre', 'description', 'prix', 'statut', 'professionnel_id'];

    public function professionnel() {
        return $this->belongsTo(Utilisateur::class, 'professionnel_id');
    }

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }
}
// This code defines a Service model in Laravel, which represents a service offered by a professional.
// The model extends the base Model class and uses the fillable property to specify which attributes can be mass assigned.
// The model defines a relationship with the Utilisateur model, indicating that each service belongs to a professional.
// It also defines a relationship with the Reservation model, indicating that each service can have multiple reservations.
