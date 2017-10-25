<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $avaliableStations = config('stationsdata');

        foreach ($avaliableStations as $station) {
            DB::table('stations')->insert([
                'created_at' => Carbon::now(),
                'latitude'   => $station['latitude'],
                'longitude'  => $station['longitude'],
                'name'       => $station['name'],
                'city'       => $station['city'],
                'street'     => $station['street'],
                'pb95'       => $station['pb95'],
                'pb98'       => $station['pb98'],
                'lpg'        => $station['lpg']
            ]);
        }
    }
}
