<?php

namespace Database\Seeders;

use App\Models\Domain;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Domain::factory()
            ->count(5)
            ->state(new Sequence(
                [
                    'name' => 'Clients',
                    'slug' => 'clients',
                    'icon' => 'door-open',
                    'secure' => true,
                ],
                [
                    'name' => 'Github',
                    'slug' => 'github',
                    'icon' => 'github',
                ],
                [
                    'name' => 'Me !',
                    'slug' => 'me',
                    'icon' => 'bookmark-star',
                    'default' => true,
                ],
                [
                    'name' => 'Docs',
                    'slug' => 'docs',
                    'icon' => 'file-earmark-richtext',
                ],
                [
                    'name' => 'Admin',
                    'slug' => 'admin',
                    'icon' => 'fingerprint',
                    'secure' => true,
                ],
            ))
            ->create();
    }
}
