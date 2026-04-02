<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\work;
use App\Models\Worker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class workerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        work::create([
        'name' => 'plombier'
        ]);
        Worker::create([
            'experience_years' => 5 ,
            'adress' => 'el youssoufia , 7ay elmou7ammadi',
            'work_id' => 1 ,
            'latitude' => 32.247913 ,
            'longitude' =>  -8.521874 ,
        ]);
        Worker::create([
            'experience_years' => 6 ,
            'adress' => 'el youssoufia , 7ay elmou7ammadi',
            'work_id' => 1 ,
            'latitude' => 32.247509 ,
            'longitude' =>  -8.521297 ,
        ]);
        Worker::create([
            'experience_years' => 2 ,
            'adress' => 'el youssoufia , 7ay elmou7ammadi',
            'work_id' => 1 ,
            'latitude' => 32.248144 ,
            'longitude' =>  -8.521082 ,
        ]);
        
            

            // $table->string('adress');
            // $table->foreignId('work_id');
            // $table->decimal('latitude');
            // $table->decimal('longitude');
    }
}
