<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PackageController extends Controller
{
    public function index(){
        $packages= Package::latest()->get();
        return view('backend.pages.package.index')->with(compact('packages'));
    }
    public function add(Request $request){
       
        if($request->isMethod('post')){
            
            $data=new Package();
            $array = array_combine($request->key, $request->value);
            if($request->hasFile('image'))
            {
            $image=$request->file('image');
            $currentDate=Carbon::now()->toDateString();
            $imageName=$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            
            if(Storage::disk('public')->exists('images/admin/package'))
            {
            Storage::disk('public')->makeDirectory('images/admin/package');
            }
            $packageImage = Image::make($image)->resize(400,200)->stream();
            Storage::disk('public')->put('images/admin/package/'.$imageName,$packageImage);
            $data->image=$imageName;
            }else{
                $data->image='default.png';
            }
            $data->name=$request->name;
            $data->details=$request->details;
            $data->price=$request->price;
            $data->status='1';
            $data->features=json_encode($array);
            $data->save();
            Toastr::success('Uploaded!');
            return redirect('b2b/package/index');die;
        }
        
        return view('backend.pages.package.add');
    }
    public function edit(Request $request, $id){
       
        if($request->isMethod('post')){
            
            $data=Package::find($id);
            $array = array_combine($request->key, $request->value);
            if($request->hasFile('image'))
            {
            $image=$request->file('image');
            $currentDate=Carbon::now()->toDateString();
            $imageName=$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            
            if(Storage::disk('public')->exists('images/admin/package'))
            {
            Storage::disk('public')->makeDirectory('images/admin/package');
            }
            $packageImage = Image::make($image)->resize(400,200)->stream();
            Storage::disk('public')->put('images/admin/package/'.$imageName,$packageImage);
            $data->image=$imageName;
            }else{
                $data->image=$data->image;
            }
            $data->name=$request->name;
            $data->details=$request->details;
            $data->price=$request->price;
            if($data->status==0){
                $data->status='0';
            }else{
                $data->status='1';
            }
            $data->features=json_encode($array);
            $data->save();
            Toastr::success('Updated!');
            return redirect('b2b/package/index');die;
        }
        
        $package=package::find($id);
        return view('backend.pages.package.edit')->with(compact('package'));
    }
    public function delete($id){
        $data= package::find($id);
        if(Storage::disk('public')->exists('images/admin/package/'.$data->image))
        {
           Storage::disk('public')->delete('images/admin/package/'.$data->image);
        }
        $data->delete();
        Toastr::success('package Deleted!','Success!');
      return redirect()->back();die;
    }
    public function updatePackageStatus(Request $request){
        if($request->ajax()){
            $data= $request->all();
            if($data['status']=='Active'){
                $status=0;
            }else{
                $status=1;
            }
            Package::where('id',$data['package_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'id'=>$data['package_id']]);
        }
    }
}
