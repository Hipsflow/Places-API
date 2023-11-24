<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "slug",
        "city",
        "state"
    ];

    protected function filterListing($filter){
        $placeQuery = Place::query();
        if ($filter !== null) {
            $placeQuery->where(function ($query) use ($filter) {
                $query->where('name', 'like', '%' . $filter . '%')
                    ->orWhere('city', 'like', '%' . $filter . '%');
            });
        }
        $places = $placeQuery->get();
        return $places;
    } 
}
