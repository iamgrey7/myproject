<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = Role::where('name', 'employee')->first(); 
        $role_manager = Role::where('name', 'manager')->first();
        
        // $role_employee = Role::find(1);
        // $role_manager = Role::find(2);

        $employee = new User(); 
        $employee->name = 'Udin'; 
        $employee->email = 'udin@gmail.com'; 
        $employee->password = bcrypt('admin'); 
        $employee->save();        
        $employee->roles()->attach($role_employee);     
        

        $manager = new User(); 
        $manager->name = 'Manager Udin'; 
        $manager->email = 'manager@gmail.com'; 
        $manager->password = bcrypt('admin');
        $manager->save(); 
        $manager->roles()->attach($role_manager);
    }
}
