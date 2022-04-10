<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PathModuleResource extends JsonResource
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
            'module_id' => $this->module_id,
            'title' => $this->Module->title,
            'image' => $this->Module->big_image,
            'numero' => $this->numero,
        ];
      }
}
