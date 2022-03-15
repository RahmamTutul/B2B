<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contact(Request $request){
        if($request->isMethod('post')){
            // dd($request->all());
            $info= new Contact;
            $info->question=$request['question'];
            $info->name=$request['name'];
            $info->phone=$request['phone'];
            $info->email=$request['email'];
            $info->company=$request['company'];
            $info->role=$request['role'];
            $info->save();
            Toastr::success('We will response soon!','Got it');
             return redirect()->back();
        }
    }
    public function view($id){
        $massage=Contact::find($id);
        $msgs=Contact::all();
       return view('backend.pages.massage')->with(compact('massage','msgs'));
    }
    public function delete($id){
        $massage=Contact::find($id)->delete();
        Toastr::success('Deleted!','Got it');
        return redirect('b2b/dashboard');
       return view('backend.pages.massage')->with(compact('massage','msgs'));
    }
}
