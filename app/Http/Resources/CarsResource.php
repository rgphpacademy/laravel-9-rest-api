<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarsResource extends JsonResource
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
            'number' => $this->number,
            'year_made' => $this->year_made,
            'model' => $this->model,
            'user' => UsersResource::collection($this->users),
            'department' => DepartmensResource::collection($this->departmens),
            'status' => StatusResource::collection($this->statuses),
            
        ];
    }
}