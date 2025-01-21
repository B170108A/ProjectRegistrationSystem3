<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AssignRolesSeeder extends Seeder
{
    public function run()
    {
        $superadmin = User::find(1); // Replace with your Superadmin user ID
        $superadmin->assignRole('Superadmin');

        $admin = User::find(2); // Replace with your Admin user ID
        $admin->assignRole('Admin');

        $crew = User::find(3); // Replace with your Crew user ID
        $crew->assignRole('Crew');
    }
}
