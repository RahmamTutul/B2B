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
          <h4 class="card-title">ADD NEW BANNER
          </h4>
        </div>
        <div class="card-body">
          <form action="{{url('b2b/component/banner/add')}}" method="POST" enctype="multipart/form-data">@csrf
            <div class="row">
              <div class="col-md-3 col-sm-4">
                <h4 class="title">Banner Image</h4>
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail">
                    <img src="{{asset('assets/backend/img/image_placeholder.jpg')}}" alt="NO image avialable">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                  <div>
                    <span class="btn btn-rose btn-round btn-file">
                      <span class="fileinput-new">Select image</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="image" />
                    </span>
                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Enter Image Alternative </label>
                  <input type="text" name="alt" class="form-control" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group" >
                  <label class="bmd-label-floating">Title</label>
                  <input type="text" name="link" class="form-control" required>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-rose pull-right">Upload</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@push('script')
<script>
</script>
@endpush