<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserPathResource extends JsonResource
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
            'path_id' => $this->Path->id,
            'image' =>$this->Path->logo,
            'user_id' => $this->user_id,
            'title' => $this->Path->title,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

        ];
    }
}
