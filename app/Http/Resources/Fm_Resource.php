<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Fm_Resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'film';

    public function toArray($request)
    {
       // return parent::toArray($request);
       return [
           'id'=>$this->resource->id,
           'nazivFilma'=>$this->resource->nazivFilma,
            'reditelj'=>new Rd_Resource($this->resource->reditelj),
            'zanr'=>new Zn_Resource($this->resource->zanr)
       ];
    }
}
