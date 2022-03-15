@extends('backend.layouts.app')

@push('style')
    
@endpush

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header card-header-icon card-header-rose">
          <div class="card-icon">
            <i class="material-icons">perm_identity</i>
          </div>
          <h4 class="card-title">Edit Profile -
            <small class="category">Complete your profile</small>
          </h4>
        </div>
        <div class="card-body">
          <form action="{{url('b2b/profile')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">{{Auth::guard('admin')->user()->email}}</label>
                  <input type="text" class="form-control" disabled>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" value="{{Auth::guard('admin')->user()->name}}">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="phone" class="form-control" value="{{Auth::guard('admin')->user()->phone}}">
                </div>
              </div>
              <div class="col-md-6">
              </div>
              <div class="col-md-3 col-sm-4">
                <h4 class="title">Avatar</h4>
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail img-circle">
                    @if (Auth::guard('admin')->user()->image=="")
                    <img src="{{asset('assets/backend/img/default-avatar.png')}}" alt="...">
                    @else
                    <img src="{{asset('storage/images/admin/avatar/'.Auth::guard('admin')->user()->image)}}" alt="...">
                    @endif
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                  <div>
                    <span class="btn btn-round btn-rose btn-file">
                      <span class="fileinput-new">Add Photo</span>
                      <input type="file" name="image" />
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-rose pull-right">Update Profile</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@push('script')
   
@endpush