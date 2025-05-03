<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;

// Routes publiques
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Routes protégées par auth:sanctum
Route::middleware('auth:sanctum')->group(function () {

    // Déconnexion
    Route::post('/logout', [AuthController::class, 'logout']);

    // Afficher les infos du user connecté
    Route::get('/me', function (Request $request) {
        return response()->json($request->user());
    });

    // Services (accessible aux prestataires ou aux clients)
    Route::get('/services', [ServiceController::class, 'index']);
    Route::get('/services/{id}', [ServiceController::class, 'show']);
    Route::post('/services', [ServiceController::class, 'store']);
    Route::put('/services/{id}', [ServiceController::class, 'update']);
    Route::delete('/services/{id}', [ServiceController::class, 'destroy']);

    // Réservations  (côté client)
    Route::get('/reservations', [ReservationController::class, 'index']);
    Route::post('/reservations', [ReservationController::class, 'store']);
    Route::get('/reservations/{id}', [ReservationController::class, 'show']);
    Route::delete('/reservations/{id}', [ReservationController::class, 'destroy']);

    // Avis (clients uniquement)
    Route::get('/reviews', [ReviewController::class, 'index']);
    Route::post('/reviews', [ReviewController::class, 'store']);
    Route::get('/reviews/{id}', [ReviewController::class, 'show']);
    Route::delete('/reviews/{id}', [ReviewController::class, 'destroy']);
});
