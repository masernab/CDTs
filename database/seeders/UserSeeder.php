<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()
            ->create([
                'name'  => 'Miguel Angel',
                'email' => 'masernabe@gmail.com',
            ]);

        User::factory(10)->create();
    }
}
