<?php

namespace Database\Seeders\Calsys;

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('status')->delete();
        
        \DB::table('status')->insert(array (
            0 => 
            array (
                'ID' => 'Active',
                'name' => 'Device is in service and calibration is current',
            ),
            1 => 
            array (
                'ID' => 'Lost',
                'name' => 'Device is NOT in use because it has been lost',
            ),
            2 => 
            array (
                'ID' => 'InsideCal',
                'name' => 'Device is being calibrated inside by QC',
            ),
            3 => 
            array (
                'ID' => 'OutsideCal',
                'name' => 'Device is being calibrated by outside QC lab',
            ),
            4 => 
            array (
                'ID' => 'Deactivated',
                'name' => 'Device no longer being used, but records retained',
            ),
            5 => 
            array (
                'ID' => 'CalInv',
                'name' => 'Calibrated Inventory ready for use',
            ),
            6 => 
            array (
                'ID' => 'DAD',
                'name' => 'DEACTIVATED AND DESTROYED',
            ),
            7 => 
            array (
                'ID' => 'Repair',
                'name' => 'Device is being repaired',
            ),
            8 => 
            array (
                'ID' => 'NotCal',
                'name' => 'Device calibration is no longer required',
            ),
            9 => 
            array (
                'ID' => 'Spare',
                'name' => 'Shelf Spare',
            ),
        ));
        
        
    }
}