<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Moduleresource extends JsonResource
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
            'id' => $this->id,
            'trainer_id' => $this->trainer_id,
            'title' => $this->title,
            'image' => $this->image,
            'new' => $this->new,
            'niveau' => $this->niveau,

        ];
    }
}
