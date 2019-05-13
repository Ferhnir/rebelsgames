<?php

namespace App\Http\Resources;

use App\Ore;
use App\CelestialObject;

use App\Http\Resources\OreResource;
use App\Http\Resources\OreCollection;
use App\Http\Resources\CelestialObjectResource;
use App\Http\Resources\CelestialObjectCollection;
use Illuminate\Http\Resources\Json\Resource;

class CelestialCategoryResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $celCatID = $this->id;

        return [
            'id'   => $this->id,
            'name' => json_decode($this->name),
            'resources' => (OreResource::collection(Ore::all()))->map(function($ore) use ($celCatID){
                return [
                    'id'        => $ore->id,
                    'name'      => json_decode($ore->name),
                    'celestial_occurr' => (CelestialObjectResource::collection(CelestialObject::where(function($query) use ($celCatID){
                        $query->where('celestial_category_id',$celCatID);
                    })->get()))->map(function($celestial) use ($ore){
                        return [
                            'id'        => $celestial->id,
                            'name'      => json_decode($celestial->name),
                            'v' => in_array($celestial->id, json_decode($ore->occurrence_obj_id))
                        ];
                    })
                ];
            })
        ];
    }
}
