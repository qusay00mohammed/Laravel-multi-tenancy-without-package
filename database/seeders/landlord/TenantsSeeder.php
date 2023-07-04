<?php

namespace Database\Seeders\Landlord;

use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenant = [
            ['name'=> 'app1', 'domain'=>'app1.laravel-multi-tenancy-without-package.test' , 'database'=>'app1'],
            ['name'=> 'app2', 'domain'=>'app2.laravel-multi-tenancy-without-package.test' , 'database'=>'app2'],
            ['name'=> 'app3', 'domain'=>'app3.laravel-multi-tenancy-without-package.test' , 'database'=>'app3'],
            ['name'=> 'app4', 'domain'=>'app4.laravel-multi-tenancy-without-package.test' , 'database'=>'app4'],
        ];

        Tenant::insert($tenant);
    }
}
