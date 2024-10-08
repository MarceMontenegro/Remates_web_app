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
    public function run()
    {
        // Crear roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'usuario']);

        // Crear permisos
        Permission::create(['name' => 'crear remate']);
        Permission::create(['name' => 'ver remates']);
        Permission::create(['name' => 'publicar producto']);
        Permission::create(['name' => 'aprobar producto']);
        
        // Asignar permisos a roles
        $role = Role::findByName('admin');
        $role->givePermissionTo(['crear remate', 'ver remates', 'aprobar producto']);

        $role = Role::findByName('usuario');
        $role->givePermissionTo(['ver remates', 'publicar producto']);
    }
}
