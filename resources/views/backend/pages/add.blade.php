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
            <h4 class="card-title">Add a profile -
            </h4>
          </div>
          <div class="card-body">
            <form action="{{url('b2b/add')}}" method="POST"> @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Email</label>
                    <input name="email" type="text" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Name</label>
                    <input name="name" type="text" class="form-control" required>
                  </div>
                </div>
              
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Password</label>
                    <input type="password" name="password" class="form-control" required> 
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Confirm password</label>
                    <input type="password" name="confirm" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Phone / Mobile</label>
                      <input type="text" name="phone" class="form-control" required>
                    </div>
                </div>
              </div>
              <button type="submit" class="btn btn-rose">Confirm</button>
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