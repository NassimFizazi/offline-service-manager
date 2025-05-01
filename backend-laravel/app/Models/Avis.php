<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Avis extends Model
{
    use HasFactory;

    protected $fillable = ['reservation_id', 'note', 'commentaire'];

    public function reservation() {
        return $this->belongsTo(Reservation::class);
    }
}
