<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FakultetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'ID' => $this->resource->id,
            'Naziv' => $this->resource->naziv,
            'Adresa' => $this->resource->adresa,
            'Email' => $this->resource->email,
            'Univerzitet' => new UniverzitetResource($this->resource->univerzitet),
        ];
    }
}
