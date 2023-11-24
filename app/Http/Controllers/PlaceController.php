<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PlaceRequest;
use App\Models\Place;

class PlaceController extends Controller
{
    public function index($filter = null)
    {
        $places = Place::filterListing($filter);
        
        if ($places->isEmpty()) {
            return response()->json(['message' => 'Places not found'], 404);
        }
        return response()->json(['places' => $places], 200);
    }

    public function store(PlaceRequest $request)
    {
        $place = Place::create($request->all());
        return response()->json(['place' => $place], 201);
    }

    public function show(Place $place)
    {
        return $place;
    }

    public function update(PlaceRequest $request, Place $place)
    {
        $place->update($request->all());
        return response()->json(['place' => $place], 200);
    }

    public function destroy(Place $place)
    {
        $place->delete();

        return response()->json(["message" => "Deleted successfully"], 204);
    }
}
