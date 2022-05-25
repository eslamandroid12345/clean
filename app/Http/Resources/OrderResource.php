<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{

    public function toArray($request)
    {
        return [

            "id" => $this->id,
            "details" => $this->details,
            "client" => $this->client,
            'is_fulfilled'  => $this->is_fulfilled,

        ];
    }
}
