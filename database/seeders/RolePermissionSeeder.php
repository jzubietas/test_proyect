<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Crear roles si no existen
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $editor = Role::firstOrCreate(['name' => 'editor']);

        // Crear permisos si no existen
        $createPost = Permission::firstOrCreate(['name' => 'create_post']);
        $editPost = Permission::firstOrCreate(['name' => 'edit_post']);
        $deletePost = Permission::firstOrCreate(['name' => 'delete_post']);

        // Asignar permisos a roles
        $admin->permissions()->attach([$createPost->id, $editPost->id, $deletePost->id]);
        $editor->permissions()->attach([$createPost->id, $editPost->id]);

        // Asignar roles a usuarios
        $user = User::find(1); // Asume que el usuario con ID 1 existe
        $user->roles()->attach($admin);

    }
}
