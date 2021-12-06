<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
        ]);
        $this->call([        
            Calsys/EmployeeTableSeeder::class,
            Calsys/DeviceTableSeeder::class,
            Calsys/PeriodTableSeeder::class,
            Calsys/SourceTableSeeder::class,
            Calsys/CalibratedByTableSeeder::class,
            Calsys/CalibrationTableSeeder::class,
            Calsys/LocationTableSeeder::class,
            Calsys/OwnerTableSeeder::class,
            Calsys/StatusTableSeeder::class,
            Calsys/TypeTableSeeder::class,
        ]);
        $this->call(AmpTableSeeder::class);
    }
}
