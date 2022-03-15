<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $categories= Category::all();
        return view('backend.pages.category.index')->with('categories', $categories);
    }
    public function updateCategoryStatus(Request $request){
        if($request->ajax()){
            $data=$request->all();
            if($data['status']=='Active'){
                $status=0;
            }else{
                $status=1;
            }
            
            Category::where('id',$data['category_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status, 'category_id'=>$data['category_id']]);
         }
    }


    public function add(Request $request){
        if($request->isMethod("post")){
             $url =Str::slug($request->name);
             $data= new Category;
             $data->name=$request->name;
             $data->parent_id=$request->parent_id;
             $data->slug=$url;
             $data->status=1;
             $data->save();
             Toastr::success('Success!','Category uploaded!');
             return redirect()->back();
        }
        $categories=Category::all();
        return view('backend.pages.category.add')->with(compact('categories'));
       
    }

    public function delete($id){
            $work=Category::find($id)->with('parent_id')->delete();
            Toastr::success('Success!','Category deleted!');
            return redirect()->back();
    }
    public function edit(Request $request, $id){
        $data=Category::find($id);
        if($request->isMethod("post")){
            $url =Str::slug($request->name);
            $data->name=$request->name;
            $data->parent_id=$request->parent_id;
            $data->slug=$url;
            $data->status=1;
            $data->save();
            Toastr::success('Success!','Category Updated!');
            return redirect()->back();
        }
         $categories= Category::all();
        return view('backend.pages.category.edit')->with(compact('categories','data'));
        
    }
}
