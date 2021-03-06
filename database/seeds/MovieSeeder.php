<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Studio::create(['name'=>'Pixar', 'founded_at'=>'1986-02-03']);
        App\Studio::create(['name'=>'DreamWorks Animation', 'founded_at'=>'2004-10-27']);
        App\Studio::create(['name' => 'Universal Studio', 'founded_at' => '1912-04-30']);
        App\Studio::create(['name' => '20th Century Fox', 'founded_at' => '1935-05-31']);

        // App\Movie::create(['name'=>'Cars 2', 'date_released'=>'2011-06-24', 'studio_id'=>1]);
        // App\Movie::create(['name'=>'Finding Nemo', 'date_released'=>'2003-05-30', 'studio_id'=>1]);
        // App\Movie::create(['name'=>'Kung Fu Panda 2', 'date_released'=>'2011-05-26', 'studio_id'=>2]);

        // Add movie
        App\Studio::find(1)->movies()->saveMany([
            App\Movie::create(['name' => 'Cars 2', 'date_released' => '2011-06-24', 'studio_id'=>1]),
            App\Movie::create(['name' => 'Finding Nemo', 'date_released' => '2003-05-30', 'studio_id'=>1]),
        ]);

        App\Studio::find(2)->movies()->saveMany([
            App\Movie::create(['name' => 'Kung Fu Panda 2', 'date_released' => '2011-05-26', 'studio_id'=>2]),
        ]);

        App\Studio::find(3)->movies()->saveMany([
            App\Movie::create(['name' => 'Despicable Me', 'date_released' => '2010-07-19', 'studio_id'=>3]),
            App\Movie::create(['name' => 'Fast & Furious 7', 'date_released' => '2015-03-16', 'studio_id'=>3]),
        ]);


    }
}
