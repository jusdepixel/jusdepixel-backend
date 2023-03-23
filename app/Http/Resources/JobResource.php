<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JobResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'job' => $this->job,
            'society' => $this->society,
            'dates' => $this->dates,
            'skills' => $this->skills,
            'location' => $this->location,
            'duration' => $this->duration,
            'icon' => $this->icon,
        ];
    }
}
