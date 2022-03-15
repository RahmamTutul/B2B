@extends('backend.layouts.app')

@push('style')
    
@endpush

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <form id="RegisterValidation" method="post" action="{{url('b2b/reset_password')}}">@csrf
        <div class="card ">
          <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
              <i class="material-icons">password</i>
            </div>
            <h4 class="card-title">Change password</h4>
          </div>
          <div class="card-body ">
            <div class="form-group">
              <label for="exampleEmail" class="bmd-label-floating"> Current Password</label>
              <input type="password" name="old" class="form-control" id="exampleEmail old" required="true">
            </div>
            <div class="form-group">
              <label for="examplePassword" class="bmd-label-floating">New Password</label>
              <input type="password" name="new" class="form-control" id="examplePassword new" required="true">
            </div>
            <div class="form-group">
              <label for="examplePassword1" class="bmd-label-floating"> Confirm Password</label>
              <input type="password" name="confirm" class="form-control" id="examplePassword1 confirm" required="true" equalTo="#examplePassword">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" id="submit" class="btn btn-fill btn-rose">Confirm</button>
          </div>
        </div>
      </form>
    </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="#pablo">
              <img src="{{asset('storage/images/admin/avatar/'.Auth::guard('admin')->user()->image)}}" alt="...">
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">CEO / Co-Founder</h6>
            <h4 class="card-title">{{$user['name']}}</h4>
            <h4 class="card-title">{{$user['email']}}</h4>
            <h4 class="card-title">+88 {{$user['phone']}}</h4>
            <a href="{{url('b2b/profile')}}" class="btn btn-rose btn-round">Edit</a>
          </div>
        </div>
      </div>
  </div>
</div>
@stop

@push('script')
   
@endpush