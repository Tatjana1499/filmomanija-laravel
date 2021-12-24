<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RediteljResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap = 'Reditelji';


    public function toArray($request)
    {
      //  return parent::toArray($request);

      return [
        'rediteljID' => $this->resource->rediteljID,
        'imeReditelja' => $this->resource->imeReditelja,
        'prezimeReditelja' => $this->resource->prezimeReditelja,
        'drzavaReditelja' => $this->resource->drzavaReditelja
        ];
    }
}
