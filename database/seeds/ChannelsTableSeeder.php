<?php

use Illuminate\Database\Seeder;
use App\Channel;
class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel1 = ['title' => 'laravel5.8'];
        $channel2 = ['title' => 'Wordpress'];
        $channel3 = ['title' => 'Flutter'];
        $channel4 = ['title' => 'React'];
        $channel5 = ['title' => 'Angular'];

        Channel::create($channel1);
        Channel::create($channel2);
        Channel::create($channel3);
        Channel::create($channel4);
        Channel::create($channel5);
    }
}
