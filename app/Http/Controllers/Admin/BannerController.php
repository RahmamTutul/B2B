<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BannerController extends Controller
{
    public function index(){
        $banners= Banner::get();
        return view('backend.pages.Banner.index')->with('banners',$banners);
    }
    public function updateBannerStatus(Request $request){
        if($request->ajax()){
            $data= $request->all();
            if($data['status']=='Active'){
                $status=0;
            }else{
                $status=1;
            }
            Banner::where('id',$data['banner_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'id'=>$data['banner_id']]);
        }

    }
    public function delete($id){
        $data= Banner::find($id);
        if(Storage::disk('public')->exists('images/admin/banner/'.$data->image))
        {
           Storage::disk('public')->delete('images/admin/banner/'.$data->image);
        }
        $data->delete();
        Toastr::success('Deleted!');
        return redirect()->back();
    }
    public function add(Request $request){
        if($request->isMethod("post")){
            $request->validate([
               'image'=>'required|mimes:png,jpg,jpeg|max:5000',
               'link'=>'required',
               'alt'=>'required',
            ]);
            $data=new Banner;
            if($request->hasFile('image'))
            {
    
            $image=$request->file('image');
            $currentDate=Carbon::now()->toDateString();
            $imageName=$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('images/admin/banner/'.$data->image))
            {
               Storage::disk('public')->makeDirectory('images/admin/banner/'.$data->image);
            }
            $bannerImage = Image::make($image)->resize(1200,900)->stream();
            Storage::disk('public')->put('images/admin/banner/'.$imageName,$bannerImage);
            $data->image=$imageName;
            }else{
                $imageName= "default.png";
            }
            $data->link=$request->link;
            $data->alt=$request->alt;
            $data->status=1;
            $data->save();
            Toastr::success('Success!','Banner Uploaded!');
            return redirect()->back();
        }
        return view('backend.pages.banner.add');
       
    }

    public function edit(Request $request ,$id){
        $banner=Banner::find($id);
        if($request->isMethod("post")){;
             if($request->hasFile('image'))
             {
     
             $image=$request->file('image');
             $currentDate=Carbon::now()->toDateString();
             $imageName=$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
             if(Storage::disk('public')->exists('images/admin/banner/'.$request->image))
             {
                Storage::disk('public')->delete('images/admin/banner/'.$request->image);
             }
             $bannerImage = Image::make($image)->resize(900,800)->stream();
             Storage::disk('public')->put('images/admin/banner/'.$imageName,$bannerImage);
             $banner->image=$imageName;
             }else{
                $imageName= $banner->image;
             }
             $banner->link=$request->link;
             $banner->alt=$request->alt;
             $banner->status=1;
             $banner->save();
             Toastr::success('Success!','Updated successfully!');
             return redirect()->back(); die;
        }
        return view('backend.pages.banner.edit')->with('banner',$banner);
       
    }
}
