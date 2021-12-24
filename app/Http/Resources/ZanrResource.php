<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ZanrResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap = 'Zanrovi';


    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'zanrID' => $this->resource->zanrID,
            'nazivZanra' => $this->resource->nazivZanra
            ];
    }
}
