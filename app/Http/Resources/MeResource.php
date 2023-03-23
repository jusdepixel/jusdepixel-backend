<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'picture' => $this->picture,
            'description' => $this->description,
            'job' => $this->job,
            'baseline' => $this->baseline,
        ];
    }
}
