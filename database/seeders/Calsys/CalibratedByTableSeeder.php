<?php

namespace Database\Seeders\Calsys;

use Illuminate\Database\Seeder;

class CalibratedByTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('calibratedBy')->delete();
        
        \DB::table('calibratedBy')->insert(array (
            0 => 
            array (
                'ID' => 'SFT',
                'name' => 'Surface Finish Technologies, inc.',
            ),
            1 => 
            array (
                'ID' => 'CAL',
                'name' => 'CALTRONIX',
            ),
            2 => 
            array (
                'ID' => 'CC',
                'name' => 'Control Company',
            ),
            3 => 
            array (
                'ID' => 'OMEGA',
                'name' => 'Omega Engineering, Inc.',
            ),
            4 => 
            array (
                'ID' => 'PSB',
                'name' => 'Precision Scale & Balance',
            ),
            5 => 
            array (
                'ID' => 'LOCKHEED',
                'name' => 'LOCKHEED MARTIN',
            ),
            6 => 
            array (
                'ID' => 'DELTA',
                'name' => 'Delta Sales Associates',
            ),
            7 => 
            array (
                'ID' => 'Fowler',
                'name' => 'Fowler',
            ),
            8 => 
            array (
                'ID' => 'TSI',
                'name' => 'TS - ALNOR',
            ),
            9 => 
            array (
                'ID' => 'PURCH',
                'name' => 'Purchased Calibrated',
            ),
            10 => 
            array (
                'ID' => 'JS',
                'name' => 'J&S Instruments',
            ),
            11 => 
            array (
                'ID' => 'ASCR',
                'name' => 'Ashcroft',
            ),
            12 => 
            array (
                'ID' => 'TECH',
                'name' => 'Technic Inc',
            ),
            13 => 
            array (
                'ID' => 'SINGLETON',
                'name' => 'Singleton Corporation',
            ),
            14 => 
            array (
                'ID' => 'DeFelsko',
                'name' => 'DeFelsko',
            ),
        ));
        
        
    }
}