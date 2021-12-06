<?php

namespace Database\Seeders\Calsys;

use Illuminate\Database\Seeder;

class PeriodTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('period')->delete();
        
        \DB::table('period')->insert(array (
            0 => 
            array (
                'ID' => 'Year',
                'name' => 'Yearly Calibration Schedule',
            ),
            1 => 
            array (
                'ID' => 'Biennial ',
                'name' => '2 Year Calibration Schedule',
            ),
            2 => 
            array (
                'ID' => 'Semiannual',
                'name' => 'Calibrated twice a year',
            ),
            3 => 
            array (
                'ID' => 'Quarterly',
                'name' => 'Calibrate four times per year',
            ),
            4 => 
            array (
                'ID' => 'INDEF',
                'name' => 'Indefinite',
            ),
        ));
        
        
    }
}