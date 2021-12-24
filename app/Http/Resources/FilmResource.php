<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */


    public static $wrap = 'Filmovi';


    public function toArray($request)
    {
       // return parent::toArray($request);

       return [
        'filmID' => $this->resource->filmID,
        'nazivFilma' => $this->resource->nazivFilma,
        'rediteljID' => $this->resource->rediteljID,
        'zanrID' => $this->resource->zanrID

        ];
    }
}
