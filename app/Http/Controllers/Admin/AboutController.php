<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $abouts= About::all();
        return view('backend.pages.about.index')->with(compact('abouts'));
    }
    public function updateAboutStatus(Request $request){
        if($request->ajax()){
            $data=$request->all();
            if($data['status']=='Active'){
                $status=0;
            }else{
                $status=1;
            }
            
            About::where('id',$data['about_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'about_id'=>$data['about_id']]);
         }
    }


    public function add(Request $request){
        if($request->isMethod("post")){
             $data= new about;
             $data->title=$request->title;
             $data->link=$request->link;
             $data->details=$request->details;
             $data->status=1;
             $data->save();
             Toastr::success('Success!','About uploaded!');
             return redirect()->back();
        }
        return view('backend.pages.about.add');
       
    }

    public function delete($id){
            $work=about::find($id);
            $work->delete();
            Toastr::success('Success!','about deleted!');
            return redirect()->back();
    }
    public function edit(Request $request, $id){
        $data=about::find($id);
        if($request->isMethod("post")){
            $data->title=$request->title;
            $data->link=$request->link;
            $data->details=$request->details;
            $data->status=1;
            $data->save();
            Toastr::success('Success!','about Updated!');
            return redirect()->back();
        }
         $categories= about::all();
        return view('backend.pages.about.edit')->with(compact('categories','data'));
        
    }
}
