<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Metadata;
use App\Models\PageContent;
use Exception;
use Illuminate\Http\Request;
use Mockery\Undefined;

class PageController extends Controller
{
    public function header(){
        return view('admin.pages.header');
    }

    public function footer(){
        return view('admin.pages.footer');
    }

    public function home(){
        $home = PageContent::where('key','regexp','home_*')->get();
        $result = [];
        foreach($home as $data){
            $result[$data->key] = $data->value;
        }
        $home = $result;
        return view('admin.pages.home',compact('home'));
    }

    public function detailedMEPdesign(){
        $home = PageContent::where('key','regexp','detailedMEPdesign_*')->get();
        $result = [];
        foreach($home as $data){
            $result[$data->key] = $data->value;
        }
        $home = $result;
        return view('admin.pages.detailedMEPdesign',compact('home'));
    }

    public function servicesElectrical(){
        $home = PageContent::where('key','regexp','servicesElectrical_*')->get();
        $result = [];
        foreach($home as $data){
            $result[$data->key] = $data->value;
        }
        $home = $result;
        return view('admin.pages.servicesElectrical',compact('home'));
    }

    public function onDemandMEPServices(){
        $home = PageContent::where('key','regexp','onDemandMEPServices_*')->get();
        $result = [];
        foreach($home as $data){
            $result[$data->key] = $data->value;
        }
        $home = $result;
        return view('admin.pages.onDemandMEPServices',compact('home'));
    }

    public function effectiveREVITmodelling(){

        $home = PageContent::where('key','regexp','effectiveREVITmodelling_*')->get();
        $result = [];
        foreach($home as $data){
            $result[$data->key] = $data->value;
        }
        $home = $result;
        return view('admin.pages.effectiveREVITmodelling',compact('home'));
    }

    public function updateMeta(Request $request){
        try{
            $data = $request->except('_token');
            foreach($data as $key => $value){
                if($content = Metadata::where('key',$key)->first()){
                    if($value != null && $value != 'undefined'){   
                        if(gettype($value) == "object"){
                            $name = rand(1000000,9999999).'.'.$value->getClientOriginalExtension();
                            $value->storeAs('public/frontassests/images/',$name);
                            $content->value = $name;
                        }else{
                            $content->value = $value;
                        }
                        $content->save();
                    }
                }else{
                    $content = new Metadata();
                    $content->key = $key;
                    $content->value = $value;
                    $content->save();
                }
            }
            return redirect()->back()->with(['status'=>'Update successfull!!']);
        }catch(Exception $ex){
            return redirect()->back()->withErrors(['errors'=>'Something went wrong!'.$ex->getMessage()]);
            // return response()->json(['responseCode'=>0,'responseText'=>'Something went wrong!'.$ex->getMessage()],500);
        }
    }

    public function updatePageContent(Request $request){
        try{
            $data = $request->except('_token'); 
            foreach($data as $key => $value){
                if($content = PageContent::where('key',$key)->first()){
                    if($value != null && $value != 'undefined'){   
                        if(gettype($value) == "object"){
                            $name = rand(1000000,9999999).'.'.$value->getClientOriginalExtension();
                            $value->storeAs('public/frontassests/images/',$name);
                            $content->value = $name;
                        }else{
                            $content->value = $value;
                        }
                        $content->save();
                    }
                }else{
                    $content = new PageContent();
                    $content->key = $key;
                    $content->value = $value;
                    $content->save();
                }
            }
            return redirect()->back()->with(['status'=>'Update successfull!!']);
        }catch(Exception $ex){
            return redirect()->back()->withErrors(['errors'=>'Something went wrong!'.$ex->getMessage()]);
            // return response()->json(['responseCode'=>0,'responseText'=>'Something went wrong!'.$ex->getMessage()],500);
        }
    }
}
