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

    public function updateMeta(Request $request){
        try{

            $request->validate([
                "key"=> "required|exists:metadata,key"
            ]);
            $value = null;
            if($file = $request->file('value')){
                $value = rand(100000,900000).".".$file->getClientOriginalExtension();
                $file->move(storage_path('app/public/frontassests/images'), $value);
            }
            $meta = Metadata::where('key',$request->key)->first();
            $meta->value = $value != null ? $value : $request->value;
            $meta->save();
            
            return response()->json(['responseCode'=>1,'responseText'=>'Update successfull!!'],200);
        }catch(Exception $ex){
            return response()->json(['responseCode'=>0,'responseText'=>'Something went wrong!'.$ex->getMessage()],500);
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
            return response()->json(['responseCode'=>1,'responseText'=>'Update successfull!!'],200);
        }catch(Exception $ex){
            return response()->json(['responseCode'=>0,'responseText'=>'Something went wrong!'.$ex->getMessage()],500);
        }
    }
}
