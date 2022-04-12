<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin =  Role::create(['name' =>'admin']);
        $editor = Role::create(['name' =>'editor']);
        $invitado = Role::create(['name'=>'invitado']);

        Permission::create(['name' => 'verEdit'])->syncRoles([$admin,$editor]);
        Permission::create(['name' =>'verCrear'])->assignRole($admin);
        
        Permission::create(['name' =>'verIndex'])->syncRoles($admin,$invitado,$editor);

        //Permission::create(['name' => 'verGestionar'])->syncRoles([$admin,$victor]);

    }
}
