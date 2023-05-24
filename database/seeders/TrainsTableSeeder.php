<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Train;
use Illuminate\Database\Seeder;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $traindata = config('traindata');

        foreach($traindata as $train){
            $newTrain = new Train();

            $newTrain->company= $train['company'];
            $newTrain->departure= $train['departure'];
            $newTrain->arrival= $train['arrival'];
            $newTrain->hour_departure= $train['hour_departure'];
            $newTrain->hour_arrival= $train['hour_arrival'];
            $newTrain->train_code= $train['train_code'];
            $newTrain->carriages= $train['carriages'];
            $newTrain->status= $train['status'];
            $newTrain->drop= $train['drop'];

            $newTrain->save();
        }


    }
}
