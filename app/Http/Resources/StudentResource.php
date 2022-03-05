<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
            'Ime i prezime' => $this->resource->ime_prezime,
            'JMBG' => $this->resource->jmbg,
            'Broj indeksa' => $this->resource->broj_indeksa,
            'Fakultet' => new FakultetResource($this->resource->fakultet),
            'Univerzitet' => new UniverzitetResource($this->resource->univerzitet),
        ];
    }
}
