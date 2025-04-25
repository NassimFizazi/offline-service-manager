<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Utilisateur extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['nom', 'email', 'password', 'type'];

    public function services() {
        return $this->hasMany(Service::class, 'professionnel_id');
    }

    public function reservations() {
        return $this->hasMany(Reservation::class, 'client_id');
    }

    public function reclamations() {
        return $this->hasMany(Reclamation::class, 'client_id');
    }

    public function estClient() {
        return $this->type === 'client';
    }

    public function estProfessionnel() {
        return $this->type === 'professionnel';
    }

    public function estAdministrateur() {
        return $this->type === 'administrateur';
    }
}
?>
// This code defines a Utilisateur model in Laravel, which represents a user in the application.
// It extends the Authenticatable class to provide authentication features. The model uses the HasFactory and Notifiable traits.
// It defines the fillable attributes, which are the attributes that can be mass assigned.
// The model also defines relationships with the Service, Reservation, and Reclamation models.
// Additionally, it includes methods to check the type of user (client, professionnel, or administrateur).
// The model is used to interact with the 'utilisateurs' table in the database, which stores user information.
// The relationships allow for easy access to related data, such as services offered by a professional or reservations made by a client.
// The estClient, estProfessionnel, and estAdministrateur methods are used to check the user's type.
// This is useful for implementing role-based access control in the application.
