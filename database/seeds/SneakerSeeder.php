<?php

use Illuminate\Database\Seeder;
use App\Sneaker;
use Carbon\Carbon;

class SneakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sneakers = [
            [
                'name'=> 'Nike',
                'collection'=> 'Presto',
                'release'=> '12/2/2019',
                'prezzo'=> 120
            ],
            [
                'name'=> 'Adidas',
                'collection'=> 'Yeezy',
                'release'=> '22/12/2016',
                'prezzo'=> 190
            ],
            [
                'name'=> 'Reebok',
                'collection'=> 'Classic',
                'release'=> '15/6/2010',
                'prezzo'=> 80
            ]
            
        ];

        foreach ($sneakers as $sneaker) {
            $newsneaker = new Sneaker();

            $newsneaker->name = $sneaker['name'];
            $newsneaker->collection = $sneaker['collection'];
            $newsneaker->release = Carbon::createFromFormat('d/m/Y', $sneaker['release']);
            $newsneaker->prezzo = $sneaker['prezzo'];

            $newsneaker->save();
        }
    }
}
