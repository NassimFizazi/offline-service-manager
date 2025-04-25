<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    protected $fillable = ['sujet', 'description', 'statut', 'client_id'];

    public function client() {
        return $this->belongsTo(Utilisateur::class, 'client_id');
    }
}
// This code defines a Reclamation model in Laravel, which represents a complaint or claim made by a client.
// The model extends the base Model class provided by Laravel.
// It specifies the fillable attributes, which are the attributes that can be mass assigned.
// The model also defines a relationship with the Utilisateur model, indicating that each reclamation belongs to a client.
// The reclamation model is used to interact with the 'reclamations' table in the database, which stores information about client complaints.
// The relationship allows for easy access to the client who made the reclamation.
// This is useful for retrieving client information when displaying reclamations or processing them.
