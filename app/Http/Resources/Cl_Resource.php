<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Cl_Resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'clan';
    public function toArray($request)
    {
       // return parent::toArray($request);
       return[
           'id'=>$this->resource->id,
           'imeClana'=>$this->resource->imeClana,
           'prezimeClana'=>$this->resource->prezimeClana,
           'vrstaClanstva'=> new Cs_Resource($this->resource->vrstaClanstva)
       ];
    }
}
