<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ModuleResource extends JsonResource
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
            'trainer' => $this->trainer->username,
            'title' => $this->title,
            'category'=>$this->category->title,
            'category_id'=>$this->category_id,
            'image' => $this->big_image,
            'new' => $this->new,
            'niveau' => $this->niveau,
            'description' => $this->description,
            'scop' => $this->scop,


        ];
    }
}
