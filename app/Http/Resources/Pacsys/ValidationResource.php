<?php

namespace App\Http\Resources\Pacsys;

use Illuminate\Http\Resources\Json\JsonResource;

class ValidationResource extends JsonResource
{
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
