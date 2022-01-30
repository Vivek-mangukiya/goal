<?php

use App\Models\Metadata;
use Illuminate\Support\Facades\URL;

function logoWhite(){
    $logo = Metadata::where('key','logo_white')->first()->value;
    return URL::to('storage/app/public/frontassests/images/'. $logo);
}

function logo(){
    $logo = Metadata::where('key','logo')->first()->value;
    return URL::to('storage/app/public/frontassests/images/'. $logo);
}

function frontassets(){
    return asset('storage/app/public/frontassests');
}

function contact(){
    $phone = Metadata::where('key','phone')->first()->value;
    return $phone;
}

function email(){
    $email = Metadata::where('key','email')->first()->value;
    return $email;
}
function address(){
    $address = Metadata::where('key','address')->first()->value;
    return $address;
}
function openTime(){
    $openTime = Metadata::where('key','open_time')->first()->value;
    return $openTime;
}
function footerText(){
    $footerText = Metadata::where('key','footer_text')->first()->value;
    return $footerText;
}