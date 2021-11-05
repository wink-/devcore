<?php

namespace App\Http\Resources\ProcessData;

use Illuminate\Http\Resources\Json\JsonResource;

class TemperatureResource extends JsonResource
{
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
