<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            TaskSeeder::class
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $adminRole = Role::findByName('admin');
        $adminRole->givePermissionTo('view posts');
        $adminRole->givePermissionTo('create posts');

        $userRole = Role::findByName('user');
        $userRole->givePermissionTo('view posts');
        $user = User::find(1); // misal pengguna dengan ID 1
        $user->assignRole('admin');
    }
}
