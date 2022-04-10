<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserModuleResource extends JsonResource
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
            'title' => $this->Module->title,
            'category_id'=>$this->Module->category->title,
            'image' => $this->Module->big_image,
            'new' => $this->Module->new,
            'niveau' => $this->Module->niveau,
            'description' => $this->Module->description,
            'scop' => $this->Module->scop,
        ];
    }
}
