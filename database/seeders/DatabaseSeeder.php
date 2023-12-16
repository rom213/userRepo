<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user2 = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $user = User::factory()->create([
            'name' => 'roma',
            'email' => 'roma@gmail.com',
        ]);
        
        $role = Role::create(['name' => 'Admin']);
        $user->assignRole($role);
    }
}