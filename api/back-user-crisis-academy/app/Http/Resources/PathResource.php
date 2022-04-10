<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Pathresource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       return [
        'id'=>$this->id,
        'title' => $this->title,
        'image' => $this->logo,
       'description' => $this->description,
        'niveau' => $this->niveau,
        'grained_points' => $this->grained_points,
        'is_premium' => $this->is_premium,


       ];
    }
}
