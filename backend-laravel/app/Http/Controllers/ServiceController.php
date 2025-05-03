<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        return Service::all();
    }

    public function show($id)
    {
        return Service::findOrFail($id);
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric'
        ]);

        $service = Service::create($fields);
        return response()->json($service, 201);
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->update($request->only(['title', 'description', 'price']));
        return response()->json($service);
    }

    public function destroy($id)
    {
        Service::destroy($id);
        return response()->json(['message' => 'Service supprimé.']);
    }
}
