<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = ['reservation_id', 'montant', 'methode', 'date_paiement'];

    public function reservation() {
        return $this->belongsTo(Reservation::class);
    }
}
