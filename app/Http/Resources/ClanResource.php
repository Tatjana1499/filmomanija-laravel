<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */


    public static $wrap = 'Clanovi';


    public function toArray($request)
    {
       // return parent::toArray($request);
       return [
        'clanID' => $this->resource->clanID,
        'imeClana' => $this->resource->imeClana,
        'prezimeClana' => $this->resource->prezimeClana,
        'clanstvoID' => $this->resource->clanstvoID
        ];
    }
}
