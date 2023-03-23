<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class JobCollection extends ResourceCollection
{
    public static $wrap = 'datas';
    public $collects = JobResource::class;

    public function toArray(Request $request): array
    {
        return [
            'count' => $this->collection->count(),
            'datas' => $this->collection->all(),
        ];
    }
}
