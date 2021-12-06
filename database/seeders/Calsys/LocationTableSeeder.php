<?php

namespace Database\Seeders\Calsys;

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('location')->delete();
        
        \DB::table('location')->insert(array (
            0 => 
            array (
                'ID' => 'QC Room',
                'name' => 'Quality Control Room',
            ),
            1 => 
            array (
                'ID' => 'Chrome Line',
                'name' => 'Chrome Finishing Line',
            ),
            2 => 
            array (
                'ID' => 'Nickel Line',
                'name' => 'Nickel Finishing Line',
            ),
            3 => 
            array (
                'ID' => 'Anodize Line',
                'name' => 'Anodize Finishing Line',
            ),
            4 => 
            array (
                'ID' => 'Zinc Rack',
                'name' => 'Zinc Rack Finishing Line',
            ),
            5 => 
            array (
                'ID' => 'Zinc Barrel',
                'name' => 'Zinc Barrel Finishing Line',
            ),
            6 => 
            array (
                'ID' => 'Lab',
                'name' => 'Lab Area',
            ),
            7 => 
            array (
                'ID' => 'PA1',
                'name' => 'PROD AREA #1',
            ),
            8 => 
            array (
                'ID' => 'Shipping',
                'name' => 'Shipping and Receiving',
            ),
            9 => 
            array (
                'ID' => 'PORT',
                'name' => 'PORTABLE EQUIP',
            ),
            10 => 
            array (
                'ID' => 'ESO',
                'name' => 'EASTSIDE OXIDE',
            ),
            11 => 
            array (
                'ID' => 'SPARES',
                'name' => 'SHELF SPARE',
            ),
            12 => 
            array (
                'ID' => 'SPA',
                'name' => 'SPARE TO ACTIVE',
            ),
            13 => 
            array (
                'ID' => 'Office',
                'name' => 'Front Office Area at Judson',
            ),
            14 => 
            array (
                'ID' => 'XRAY BACK',
                'name' => 'Back XRay Room',
            ),
            15 => 
            array (
                'ID' => 'GRIEVE',
                'name' => 'Grieve Furnace',
            ),
            16 => 
            array (
                'ID' => 'Quincy',
                'name' => 'Quincy Furnace',
            ),
            17 => 
            array (
                'ID' => 'Linberg',
                'name' => 'Lab Oven',
            ),
            18 => 
            array (
                'ID' => 'DESTROYED',
                'name' => '',
            ),
            19 => 
            array (
                'ID' => 'Elect Room',
                'name' => 'Electrical Maintenance Room',
            ),
            20 => 
            array (
                'ID' => 'DEACT',
                'name' => 'unit is deactivated',
            ),
            21 => 
            array (
                'ID' => 'DEACT_DB',
                'name' => 'Unit is deactivated and stored at Diamond and Baco',
            ),
            22 => 
            array (
                'ID' => 'DEACT_SFT',
                'name' => 'Unit is deactivated and stored at SFT',
            ),
            23 => 
            array (
                'ID' => 'Maint Shop',
                'name' => 'Maintenance Shop',
            ),
        ));
        
        
    }
}