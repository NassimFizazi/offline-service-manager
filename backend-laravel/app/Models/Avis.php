<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    protected $fillable = ['commentaire', 'note', 'reservation_id'];

    public function reservation() {
        return $this->belongsTo(Reservation::class);
    }
}
