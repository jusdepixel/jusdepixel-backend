<?php

namespace App\Http\Controllers\Admin;

use App\Models\Module;

class ModuleController
{
    public function __invoke(string $slug): object
    {
        return Module::query()
            ->where(['slug' => $slug])
            ->first();
    }
}
