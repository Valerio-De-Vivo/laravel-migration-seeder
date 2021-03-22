<?php

use Illuminate\Database\Seeder;
use App\Sneaker;
use Faker\Generator as Faker;
use Carbon\Carbon;
use Illuminate\Support\Str;



class SneakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 10; $i++) { 
            $newsneaker = new Sneaker();
            $newsneaker->name = $faker->name();
            $newsneaker->collection = $faker->words(5,true);
            $newsneaker->release = $faker->date();
            $newsneaker->prezzo = $faker->numberBetween(0, 300);

            $newsneaker->save();
        }


        // $sneakers = config('students');

        // foreach ($sneakers as $sneaker) {
        //     $newsneaker = new Sneaker();

        //     $newsneaker->name = $sneaker['name'];
        //     $newsneaker->collection = $sneaker['collection'];
        //     $newsneaker->release = Carbon::createFromFormat('d/m/Y', $sneaker['release']);
        //     $newsneaker->prezzo = $sneaker['prezzo'];

        //     $newsneaker->save();
        // }
    }
}
