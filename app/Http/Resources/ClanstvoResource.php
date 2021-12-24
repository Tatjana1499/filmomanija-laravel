<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClanstvoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap = 'Clanstva';



    public function toArray($request)
    {
       // return parent::toArray($request);
       return [
        'clanstvoID' => $this->resource->clanstvoID,
        'nazivClanstva' => $this->resource->nazivClanstva
        ];
    }
}
