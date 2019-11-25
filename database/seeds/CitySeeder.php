<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert(array(
                0 =>
                    array(
                        'code' => 'CAI',
                    ), 1 =>
                    array(
                        'code' => 'CAN',
                    ),2 =>
                    array(
                        'code' => 'JED',
                    ),3 =>
                    array(
                        'code' => 'JED',
                    ),4 =>
                    array(
                        'code' => 'AUH',
                    ),5 =>
                    array(
                        'code' => 'IND',
                    ),6 =>
                    array(
                        'code' => 'ADL',
                    ),7 =>
                    array(
                        'code' => 'BAH',
                    ),8 =>
                    array(
                        'code' => 'BCN',
                    ),9 =>
                    array(
                        'code' => 'BBC',
                    ),10 =>
                    array(
                        'code' => 'GIZ',
                    ),
            )
        );
    }
}
