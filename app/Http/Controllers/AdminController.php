<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Contact;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function index(){
        $msgs=Contact::all();
        return view("backend.pages.dashboard")->with(compact('msgs'));
    }
    public function login(Request $request){
        if($request->isMethod('post')){
            $data= $request->all();
            if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password'], 'status'=>1])){
                Toastr::success("You are logged in!");
                return redirect("b2b/dashboard");die;
            }else{
                Toastr::error("Credentials do not match!");
                return redirect()->back();die;
            }
        }
        return view('backend.pages.login');
    }
    public function logout(){
        Auth::guard('admin')->logout();
        Toastr::success('Signed out!');
        return redirect('/b2b/admin_login');
    }
    public function reset(Request $request){
        $id= Auth::guard('admin')->user()->id;
        $user= Admin::find($id);
        if($request->isMethod('post')){
            $data=$request->all();
           if($data['old']==""){
            Toastr::error('Please enter current password!');
            return redirect()->back();die;
           }
           elseif(!Hash::check($data['old'],$user['password'])){
             Toastr::error('Current password is incorrect!');
             return redirect()->back();die;
           }else{
             $user->update(['password'=>Hash::make($data['confirm'])]);
             Toastr::success('Password updated!');
             return redirect()->back();die;
           }
        }
        return view('backend.pages.reset')->with(compact('user'));
    }

    public function profile(Request $request){
        if($request->isMethod('post')){
            $request->validate([
                'name' => 'required',
                'phone' => 'required',
            ]);
            // dd($request->all());
            $id= Auth::guard('admin')->user('id');
            $user= Admin::find($id);
            if($request->hasFile('image'))
            {
 
             $image=$request->file('image');
             $currentDate=Carbon::now()->toDateString();
             $imageName=$currentDate.'-'.uniqid().$image->getClientOriginalExtension();
 
             if(!Storage::disk('public')->exists('images/admin/avatar'))
             {
                Storage::disk('public')->makeDirectory('images/admin/avatar');
             }
             $profileImage = Image::make($image)->resize(400,400)->stream();
             Storage::disk('public')->put('images/admin/avatar/'.$imageName,$profileImage);
            }else{
                $imageName=$user->image;
            }
            Admin::select(['id',$id])->update(['name'=>$request->name,'phone'=>$request->phone, 'image'=>$imageName]);
            Toastr::success('Info updated!');
             return redirect()->back();die;
        }
        return view('backend.pages.profile');
    }

    public function add(Request $request){
        if($request->isMethod('post')){
          $request->validate([
              'email' => 'required|email|unique:admins',
              'name' => 'required',
              'phone' => 'required',
              'password' => 'required',
          ]);
          if($request->password!==$request->confirm){
            Toastr::error('Insert password  carefully!');
            return redirect()->back();die;
          }
          $data= $request->all();
          $admin = New Admin;
          $admin->name=$data['name'];
          $admin->email=$data['email'];
          $admin->phone=$data['phone'];
          $admin->password=bcrypt($data['confirm']);
          $admin->status=1;
          $admin->save();
          Toastr::success('New user added!');
          return redirect()->back();die;
      }
      $users= Admin::all()->toArray();
      return view('backend.pages.add')->with(compact('users'));
  }
}
