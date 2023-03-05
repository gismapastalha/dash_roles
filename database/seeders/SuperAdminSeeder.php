<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = User::create([
            'name'=> 'Ouissam Talha',
            'email'=> 'ouissam@gmail.com',
            'password'=> bcrypt('12345678')
        ]);

        //$rol = Role::create(['name'=>'Administrador']);
        //$permisos = Permission::pluck('id', 'id')->all();
        $usuario->assignRole('Administrador');

    }
}
