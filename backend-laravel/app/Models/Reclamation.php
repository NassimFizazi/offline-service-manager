<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reclamation extends Model
{
    use HasFactory;

    protected $fillable = ['utilisateur_id', 'message', 'statut'];

    public function utilisateur() {
        return $this->belongsTo(Utilisateur::class);
    }
}
