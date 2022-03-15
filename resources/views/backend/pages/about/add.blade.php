@extends('backend.layouts.app')

@push('style')

@endpush

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header card-header-icon card-header-rose">
          <div class="card-icon">
            <i class="material-icons">add_task</i>
          </div>
          <h4 class="card-title">ADD NEW CATEGORY
          </h4>
        </div>
        <div class="card-body">
          <form action="{{url('b2b/about/add')}}" method="POST">@csrf
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label class="bmd-label-floating">About title </label>
                  <input type="text" name="title" class="form-control" required>
                </div>
              </div>
              <div class="col-md-8 mb-5">
                <div class="form-group">
                  <h3 class="mb-3">Enter Details</h3>
                  <textarea  id="editor" name="details" class="form-control mb-5" placeholder="Enter Details"></textarea>
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <label class="bmd-label-floating">Link </label>
                  <input type="text" name="link" class="form-control" required>
                </div>
              </div>
            </div>
            </div>
            <button type="submit" class="btn btn-rose mt-5">Upload</button>
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