<?php

use App\Models\Metadata;
use Illuminate\Database\Seeder;

class MetadataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "phone" => '+234 8063557383',
            "email" => "abc@xyz.com",
            "logo" => "logo.svg",
            "address" => "Xpress House Otunba Jobi Fele Way Alausa Ikeja, Lagos.",
            "open_time" => "Monday-Friday: 9:00 am to 5:00pm"
        ];

        foreach($data as $key => $value){
            $meta = new Metadata();
            $meta->key = $key;
            $meta->value = $value;
            $meta->save();
        }
    }
}
