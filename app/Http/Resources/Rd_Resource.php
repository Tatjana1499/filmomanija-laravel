<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Rd_Resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'reditelj';


    public function toArray($request)
    {
       // return parent::toArray($request);
       return [
        'id'=>$this->resource->id,
        'imeReditelja'=>$this->resource->imeReditelja,
        'prezimeReditelja'=>$this->resource->prezimeReditelja,
        'drzavaReditelja' =>$this->resource->drzavaReditelja
       ];
    }
}
