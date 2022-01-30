<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PageContent;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function detailedMEPdesign(){
        $home = PageContent::where('key','regexp','detailedMEPdesign_*')->get();
        $result = [];
        foreach($home as $data){
            $result[$data->key] = $data->value;
        }
        $home = $result;
        return view('front.services.detailedMEPdesign',compact('home'));
    }

    public function effectiveREVITmodelling(){
        $home = PageContent::where('key','regexp','effectiveREVITmodelling_*')->get();
        $result = [];
        foreach($home as $data){
            $result[$data->key] = $data->value;
        }
        $home = $result;
        return view('front.services.effectiveREVITmodelling',compact('home'));
    }

    public function onDemandMEPServices(){
        return view('front.services.onDemandMEPServices');
    }

    public function servicesElectrical(){
        return view('front.services.servicesElectrical');
    }
    public function servicesMechanical(){
        return view('front.services.servicesMechanical');
    }
    public function servicesPlumbing(){   
        return view('front.services.servicesPlumbing');
    }
}
