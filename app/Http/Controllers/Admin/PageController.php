<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Metadata;
use Exception;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function header(){
        return view('admin.pages.header');
    }

    public function footer(){
        return view('admin.pages.footer');
    }

    public function home(){
        return view('admin.pages.home');
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
            $end = explode('/',$request->getRequestUri());
            $end = end($end);
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
}
