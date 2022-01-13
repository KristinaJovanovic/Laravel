<?php

namespace App\Http\Resources;

use App\Models\Category;
use App\Models\Producer;
use Illuminate\Http\Resources\Json\JsonResource;

class ResourceProduct extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $producer = Producer::find($this->producer_id);
        $category = Category::find($this->category_id);

        return [
            'id'=>$this->id,
            'nazivProizvoda'=>$this->name,
            'cena'=>$this->price,
            'velicina' =>$this->size,
            'proizvodjac'=> $producer['name'],
            'kategorija'=>$category['name']
        ];

    }
}
