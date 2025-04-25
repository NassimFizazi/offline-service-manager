<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('reclamations', function (Blueprint $table) {
            $table->id();
            $table->string('sujet');
            $table->text('description');
            $table->enum('statut', ['nouvelle', 'en_cours', 'resolue'])->default('nouvelle');
            $table->foreignId('client_id')->constrained('utilisateurs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('reclamations');
    }
};
