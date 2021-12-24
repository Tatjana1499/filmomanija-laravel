<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IznajmljivanjeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap = 'Iznajmljivanja';


    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'clan' => $this->resource->clanID,
            'film' => $this->resource->filmID,
            ];
    }
}
