<?php

use Illuminate\Database\Seeder;
use App\Record\Timer;


class TimerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $timer = new Timer();
        $timer->name = 'Sample Record';
        $timer->start = '2019-02-01 10:00:00';
        $timer->end = '2019-02-01 11:00:00';
        $timer->save();

    }
}
