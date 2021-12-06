<?php

namespace Database\Seeders\Calsys;

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('type')->delete();
        
        \DB::table('type')->insert(array (
            0 => 
            array (
                'ID' => 'DE20',
                'name' => 'Process Controller',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0047',
            ),
            1 => 
            array (
                'ID' => 'DQ15D',
                'name' => 'HOT & COLD Processor control',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0047',
            ),
            2 => 
            array (
                'ID' => 'DME 5795',
                'name' => 'PROC CONT',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0047',
            ),
            3 => 
            array (
                'ID' => 'DC RECT',
                'name' => 'D C RECTIFIER',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0047',
            ),
            4 => 
            array (
                'ID' => 'HT',
                'name' => 'Hand Tools',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            5 => 
            array (
                'ID' => 'WCT',
                'name' => 'WALL CLOCKS & TIMERS',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0047',
            ),
            6 => 
            array (
                'ID' => 'THERMOC',
                'name' => 'thermom/thermcpl',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            7 => 
            array (
                'ID' => 'SCALE',
                'name' => 'Scale',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            8 => 
            array (
                'ID' => 'WEIGHTS',
                'name' => 'Weights',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            9 => 
            array (
                'ID' => 'PG',
                'name' => 'Pressure Gauge',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            10 => 
            array (
                'ID' => 'DCAA',
                'name' => 'ANALOG AMMETER',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0047-DCAA',
            ),
            11 => 
            array (
                'ID' => 'DCAV',
                'name' => 'ANALOG VOLTMETER',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0047-DCAV',
            ),
            12 => 
            array (
                'ID' => 'DCDA',
                'name' => 'DIGITAL AMMETER',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0047-DCDA',
            ),
            13 => 
            array (
                'ID' => 'DCDT',
                'name' => 'DIGITAL TIMER',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0047-DCDT',
            ),
            14 => 
            array (
                'ID' => 'DCDV',
                'name' => 'DIGITAL VOLTMETER',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0047-DCDV',
            ),
            15 => 
            array (
                'ID' => 'DCAT',
                'name' => 'ANALOG TIMERS',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0047-DCAT',
            ),
            16 => 
            array (
                'ID' => 'PINS',
                'name' => 'Pin Gauges',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            17 => 
            array (
                'ID' => 'pH',
                'name' => 'pH Meters',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            18 => 
            array (
                'ID' => 'XRAY',
                'name' => 'XRAY MACHINES',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            19 => 
            array (
                'ID' => 'THICKNESS',
                'name' => 'Thickness Testers',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            20 => 
            array (
                'ID' => 'THREAD',
                'name' => 'Thread Gages',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            21 => 
            array (
                'ID' => 'DLOG',
                'name' => 'Data Loggers',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            22 => 
            array (
                'ID' => 'CAL',
                'name' => 'Secondary Standards',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            23 => 
            array (
                'ID' => 'MIC STD',
                'name' => 'Micrometer Standards',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            24 => 
            array (
                'ID' => 'HP',
                'name' => 'Hot Plate',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            25 => 
            array (
                'ID' => 'LIGHT',
                'name' => 'Light Measuring Devices',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            26 => 
            array (
                'ID' => 'OVENS',
                'name' => 'Ovens',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-QT-011',
            ),
            27 => 
            array (
                'ID' => 'OVENCTRL',
                'name' => 'Oven Control',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0047',
            ),
            28 => 
            array (
                'ID' => 'RING',
                'name' => 'Ring Gauge',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            29 => 
            array (
                'ID' => 'PROFILE',
                'name' => 'Profilometers and its standards',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            30 => 
            array (
                'ID' => 'AIR',
                'name' => 'Air measuring devices',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            31 => 
            array (
                'ID' => 'TDS',
                'name' => 'TDS meters',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0047',
            ),
            32 => 
            array (
                'ID' => 'FOIL',
                'name' => 'Thickness Foils',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
            33 => 
            array (
                'ID' => 'CONS',
                'name' => 'Consumable/Disposable Items',
                'procLink' => '',
            ),
            34 => 
            array (
                'ID' => 'TEST',
                'name' => 'Test and Calibration Equipment',
                'procLink' => 'http://eaglets/wiki/index.php/SFT-CAL-0002',
            ),
        ));
        
        
    }
}