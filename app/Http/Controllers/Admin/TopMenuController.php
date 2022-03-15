<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TopMenu;
use Brian2694\Toastr\Facades\Toastr;
class TopMenuController extends Controller
{
    public function index(){
        $datas= TopMenu::all();
        return view('backend.pages.topMenu.index')->with(compact('datas'));
    }
    public function updateAboutStatus(Request $request){
        if($request->ajax()){
            $data=$request->all();
            if($data['status']=='Active'){
                $status=0;
            }else{
                $status=1;
            }
            
            TopMenu::where('id',$data['topMenu_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'topMenu_id'=>$data['topMenu_id']]);
         }
    }


    public function add(Request $request){
        if($request->isMethod("post")){
             $data= new TopMenu;
             $data->type=$request->type;
             $data->title=$request->title;
             $data->custom_url=$request->custom_url;
             $data->color=$request->color;
             $data->save();
             Toastr::success('Success!','Menu item uploaded!');
             return redirect()->back();
        }
        $types=array('Offer','Page','Static','Info');
        return view('backend.pages.topMenu.add')->with(compact('types'));
       
    }

    public function delete($id){
            $work=TopMenu::find($id);
            $work->delete();
            Toastr::success('Success!','Menu item deleted!');
            return redirect()->back();
    }
    public function edit(Request $request, $id){
        $data=TopMenu::find($id);
        if($request->isMethod("post")){
            $data->type=$request->type;
            $data->title=$request->title;
            $data->custom_url=$request->custom_url;
            $data->color=$request->color;
            $data->save();
            Toastr::success('Success!','Menu item updated!!');
            return redirect()->back();
        }
        $types=array('Offer','Page','Static','Info');
        return view('backend.pages.topMenu.edit')->with(compact('data','types'));
        
    }
}
