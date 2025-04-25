<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['date', 'statut', 'client_id', 'service_id'];

    public function client() {
        return $this->belongsTo(Utilisateur::class, 'client_id');
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }

    public function paiement() {
        return $this->hasOne(Paiement::class);
    }

    public function avis() {
        return $this->hasOne(Avis::class);
    }
}
