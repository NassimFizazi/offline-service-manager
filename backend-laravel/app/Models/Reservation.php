<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'service_id', 'date_reservation', 'etat'];

    public function client() {
        return $this->belongsTo(Utilisateur::class, 'client_id');
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }

    public function paiement() {
        return $this->hasOne(Paiement::class);
    }
}
