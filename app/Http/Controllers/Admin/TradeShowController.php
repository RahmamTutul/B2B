<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tradeshows;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;

class TradeShowController extends Controller
{
    public function index(){
        $shows= Tradeshows::all();
        return view('backend.pages.show.index')->with(compact('shows'));
    }
    public function delete($id){
        $data= Tradeshows::find($id);
        if(Storage::disk('public')->exists('images/admin/show/'.$data->image))
        {
           Storage::disk('public')->delete('images/admin/show/'.$data->image);
        }
        $data->delete();
        Toastr::success('Deleted!');
        return redirect()->back();
    }
    public function add(Request $request){
        if($request->isMethod("post")){
            $data=new Tradeshows;
            if($request->hasFile('image'))
            {
    
            $image=$request->file('image');
            $currentDate=Carbon::now()->toDateString();
            $imageName=$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('images/admin/show/'.$data->image))
            {
               Storage::disk('public')->makeDirectory('images/admin/show/'.$data->image);
            }
            $showImage = Image::make($image)->resize(1900,600)->stream();
            Storage::disk('public')->put('images/admin/show/'.$imageName,$showImage);
            $data->image=$imageName;
            }else{
                $imageName= "default.png";
            }
            $data->show_name=$request->show_name;
            $data->venue=$request->venue;
            $data->ev_description=$request->ev_description;
            $data->org_profile=$request->org_profile;
            $data->venue=$request->venue;
            $data->save();
            Toastr::success('Success!','show Uploaded!');
            return redirect()->back();
        }
        return view('backend.pages.show.add');
       
    }

    public function edit(Request $request ,$id){
        $show=Tradeshows::find($id);
        if($request->isMethod("post")){;
             if($request->hasFile('image'))
             {
     
             $image=$request->file('image');
             $currentDate=Carbon::now()->toDateString();
             $imageName=$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
             if(Storage::disk('public')->exists('images/admin/show/'.$show->image))
             {
                Storage::disk('public')->delete('images/admin/show/'.$show->image);
             }
             $showImage = Image::make($image)->resize(1900,600)->stream();
             Storage::disk('public')->put('images/admin/show/'.$imageName,$showImage);
             $show->image=$imageName;
             }else{
                $imageName= $show->image;
             }
             $show->show_name=$request->show_name;
             $show->venue=$request->venue;
             $show->ev_description=$request->ev_description;
             $show->org_profile=$request->org_profile;
             $show->venue=$request->venue;
             $show->save();
             Toastr::success('Success!','Updated successfully!');
             return redirect()->back(); die;
        }
        return view('backend.pages.show.edit')->with('show',$show);
       
    }
}
