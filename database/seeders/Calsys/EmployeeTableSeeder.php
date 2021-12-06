<?php

namespace Database\Seeders\Calsys;

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employee')->delete();
        
        \DB::table('employee')->insert(array (
            0 => 
            array (
                'ID' => 'JAS',
                'userInit' => 'JAS',
                'name' => 'Jack Slocum',
            ),
            1 => 
            array (
                'ID' => 'bob',
                'userInit' => 'RB',
                'name' => 'Bob Beckwith',
            ),
            2 => 
            array (
                'ID' => 'mark',
                'userInit' => 'MC',
                'name' => 'Mark Coles',
            ),
            3 => 
            array (
                'ID' => 'dagssr',
                'userInit' => 'DG',
                'name' => 'Daniel Goodwin Sr.',
            ),
            4 => 
            array (
                'ID' => 'riw',
                'userInit' => 'RW',
                'name' => 'Robert Winkky',
            ),
            5 => 
            array (
                'ID' => 'mb',
                'userInit' => 'MB',
                'name' => 'Mike Bolt',
            ),
            6 => 
            array (
                'ID' => 'kzepp',
                'userInit' => 'KZ',
                'name' => 'Karl Zepp',
            ),
        ));
        
        
    }
}