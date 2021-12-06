<?php

namespace Database\Seeders\Calsys;

use Illuminate\Database\Seeder;

class SourceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('source')->delete();
        
        \DB::table('source')->insert(array (
            0 => 
            array (
                'ID' => 'ProTech',
                'name' => 'Process Technologies',
            ),
            1 => 
            array (
                'ID' => 'ALD',
                'name' => 'ALDONEX',
            ),
            2 => 
            array (
                'ID' => 'RAP',
                'name' => 'RAPID',
            ),
            3 => 
            array (
                'ID' => 'Mitutoyo',
                'name' => 'Mitutoyo',
            ),
            4 => 
            array (
                'ID' => 'BS',
                'name' => 'Brown & Sharpe',
            ),
            5 => 
            array (
                'ID' => 'Starrett',
                'name' => 'Starrett',
            ),
            6 => 
            array (
                'ID' => 'SPI',
                'name' => 'SPI',
            ),
            7 => 
            array (
                'ID' => 'OMEGA',
                'name' => 'OMEGA',
            ),
            8 => 
            array (
                'ID' => 'McMaster',
                'name' => 'McMaster-Carr',
            ),
            9 => 
            array (
                'ID' => 'HULL',
                'name' => 'HULL',
            ),
            10 => 
            array (
                'ID' => 'PSB',
                'name' => 'Precision Scale & Balance',
            ),
            11 => 
            array (
                'ID' => 'Singelton',
                'name' => 'Singelton',
            ),
            12 => 
            array (
                'ID' => 'ING',
                'name' => 'INGRAHAM',
            ),
            13 => 
            array (
                'ID' => 'THERMO',
                'name' => 'THERMO SCIENTIFIC',
            ),
            14 => 
            array (
                'ID' => 'UNKNOWN',
                'name' => 'UNKNOWN',
            ),
            15 => 
            array (
                'ID' => 'Rice',
                'name' => 'Rice Lake',
            ),
            16 => 
            array (
                'ID' => 'LAX',
                'name' => 'LACROSSE CLOCK CO',
            ),
            17 => 
            array (
                'ID' => 'Fischer',
                'name' => 'Fischer',
            ),
            18 => 
            array (
                'ID' => 'Fowler',
                'name' => 'Fowler',
            ),
            19 => 
            array (
                'ID' => 'TSI',
                'name' => 'TSI - ALNOR',
            ),
            20 => 
            array (
                'ID' => 'VTG',
                'name' => 'Vermont Gage',
            ),
            21 => 
            array (
                'ID' => 'CEL',
                'name' => 'Cleveland Electric Laboratories',
            ),
            22 => 
            array (
                'ID' => 'COLE',
                'name' => 'Cole-Parmer',
            ),
            23 => 
            array (
                'ID' => 'GRIEVE',
                'name' => 'The Grieve Corporation',
            ),
            24 => 
            array (
                'ID' => 'QUINCY',
                'name' => 'Precision Quincy Corporation',
            ),
            25 => 
            array (
                'ID' => 'LINDBERG',
                'name' => 'Lindberg/Blue',
            ),
            26 => 
            array (
                'ID' => 'FUJI',
                'name' => 'Fuji Electric',
            ),
            27 => 
            array (
                'ID' => 'OMRON',
                'name' => 'Omron Corp',
            ),
            28 => 
            array (
                'ID' => 'Empire',
                'name' => 'Empire Instruments',
            ),
            29 => 
            array (
                'ID' => 'Watlow',
                'name' => 'Watlow Electric Manufacturing Company',
            ),
            30 => 
            array (
                'ID' => 'State',
                'name' => 'State Chemical Manufacturing co.',
            ),
            31 => 
            array (
                'ID' => 'TECHNIC',
                'name' => 'TECHNIC inc. Equipment Devision',
            ),
            32 => 
            array (
                'ID' => 'SFT',
                'name' => 'SURFACE FINISH TECH',
            ),
            33 => 
            array (
                'ID' => 'DUO',
                'name' => 'DUOYI - eBay',
            ),
            34 => 
            array (
                'ID' => 'Delta',
                'name' => 'Delta Sales Associates',
            ),
            35 => 
            array (
                'ID' => 'DeFelsko',
                'name' => 'DeFelsko Inspection Instruments',
            ),
            36 => 
            array (
                'ID' => 'OAKTON',
                'name' => 'OAKTON',
            ),
        ));
        
        
    }
}