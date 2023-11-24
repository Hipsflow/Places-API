<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PlaceRequest;
use App\Models\Place;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($filter = null)
    {
        $placeQuery = Place::query();
        if ($filter !== null) {
            $placeQuery->where(function ($query) use ($filter) {
                $query->where('name', 'like', '%' . $filter . '%')
                    ->orWhere('city', 'like', '%' . $filter . '%');
            });
        }
        $places = $placeQuery->get();
        if ($places->isEmpty()) {
            return response()->json(['message' => 'Places not found'], 404);
        }
        return response()->json(['places' => $places], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlaceRequest $request)
    {
        $place = Place::create($request->all());
        return response()->json(['place' => $place], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Place $place)
    {
        return $place;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlaceRequest $request, Place $place)
    {
        $place->update($request->all());
        return response()->json(['place' => $place], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        $place->delete();

        return response()->json(["message" => "Deleted successfully"], 204);
    }
}
