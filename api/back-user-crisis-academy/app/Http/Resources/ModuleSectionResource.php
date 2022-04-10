<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ModuleSectionResource extends JsonResource
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
            'trainer' => $this->module->trainer->username,
            'trainer_function' => $this->module->trainer->function,
            'section_id' => $this->section_id,
            'title' => $this->module->title,
            'title_section' => $this->section->title,
            'image' => $this->module->big_image,
            'module_id' => $this->module_id,
            'numero' => $this->numero,


        ];
    }
}
