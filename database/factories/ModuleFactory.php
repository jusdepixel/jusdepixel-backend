<?php

namespace Database\Factories;

use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Module>
 */
class ModuleFactory extends Factory
{
    public function definition(): array
    {
        $model = fake()->domainWord();

        return [
            'name' => ucfirst($model),
            'model' => 'App\Models\\' . ucfirst($model),
            'slug' => $model . 's',
        ];
    }
}
