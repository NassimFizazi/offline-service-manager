<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index()
    {
        return Reservation::with(['user', 'service'])->get();
    }

    public function show($id)
    {
        return Reservation::with(['user', 'service'])->findOrFail($id);
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'service_id' => 'required|exists:services,id',
            'reserved_at' => 'required|date'
        ]);

        $reservation = Reservation::create([
            'user_id' => $request->user()->id,
            'service_id' => $fields['service_id'],
            'reserved_at' => $fields['reserved_at']
        ]);

        return response()->json($reservation, 201);
    }

    public function destroy($id)
    {
        Reservation::destroy($id);
        return response()->json(['message' => 'Réservation annulée.']);
    }
}
