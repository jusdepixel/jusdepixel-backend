<?php

namespace Database\Seeders;

use App\Models\Domain;
use App\Models\Module;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    public function run(): void
    {
        Module::factory(2)
            ->state(new Sequence(
                [
                    'model' => Domain::class,
                    'name' => 'Domain',
                    'slug' => 'domains',
                ],
                [
                    'model' => User::class,
                    'name' => 'User',
                    'slug' => 'users',
                ]
            ))
            ->create();
    }
}
