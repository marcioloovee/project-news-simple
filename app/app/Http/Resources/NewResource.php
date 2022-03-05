<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id'            => $this->id,
            'title'         => $this->title,
            'subtitle'      => $this->subtitle,
            'body'          => $this->body,
            'author'        => $this->author,
            'image'         => $this->image,
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_at
        ];
    }
}
