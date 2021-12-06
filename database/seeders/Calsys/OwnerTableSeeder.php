<?php

namespace Database\Seeders\Calsys;

use Illuminate\Database\Seeder;

class OwnerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('owner')->delete();
        
        \DB::table('owner')->insert(array (
            0 => 
            array (
                'ID' => 'SFT',
                'name' => 'Surface Finish Technologies, inc.',
            ),
            1 => 
            array (
                'ID' => 'Lockheed',
                'name' => 'Lockheed Martin',
            ),
            2 => 
            array (
                'ID' => 'Trayer',
                'name' => 'Trayer Products ',
            ),
        ));
        
        
    }
}