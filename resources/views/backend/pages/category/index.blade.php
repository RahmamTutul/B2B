@extends('backend.layouts.app')

@push('style')
    
@endpush

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
            <i class="material-icons">visibility</i>
          </div>
          <h4 class="card-title">Categories Table</h4>
          <a class="btn btn-rose float-right" href="{{url('b2b/category/add')}}">ADD NEW</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Name</th>
                  <th>Parent id</th>
                  <th class="text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                @php
                   $i = 0;
                @endphp
                @foreach ($categories as $category)
                <tr>
                  <?php $i++; ?>
                  <td class="text-center">{{$i}}</td>
                  <td>{{$category['name']}}</td>
                  <td>
                   @if($category->parent_id != 0) {{$category->parent->name}} @else Main Category @endif
                  </td>
                  <td class="td-actions text-right">
                    @if ($category['status']==0)
                    <a  class="btn btn-info updateCategoryStatus" title="Turn off / On" id="category-{{$category->id}}" category_id="{{$category->id}}" style="color: #fff">
                    <i class="material-icons" status="desable">toggle_off</i>
                    </a>
                    @else
                    <a  class="btn btn-info updateCategoryStatus" title="Turn off / On" id="category-{{$category->id}}" category_id="{{$category->id}}" style="color: #fff">
                      <i class="material-icons" status="Active">toggle_on</i>
                    </a>
                    @endif
                    <a href="{{url('b2b/category/edit',$category->id)}}"  class="btn btn-rose" title="Edit" style="color: #fff">
                      <i class="material-icons">edit</i>
                    </a>
                    <a href="{{url('b2b/category/delete',$category->id)}}" name="category" class="btn btn-danger confirmDelete" title="Delete" style="color: #fff">
                      <i class="material-icons">close</i>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
</div>
@stop

@push('script')
   
@endpush