<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $user = new \App\Models\User;

        $admin = $user->factory()->create([
            'name' => \Illuminate\Support\Str::ucfirst(RoleEnum::ADMIN->value),
            'email' => 'admin@example.com',
            'username' => 'admin',

        ]);

        $adminRole = app(Role::class)->findOrCreate(RoleEnum::ADMIN->value, 'web');
        $admin->assignRole($adminRole);
    }
}
