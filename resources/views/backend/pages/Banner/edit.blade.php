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
          <form action="{{url('b2b/component/banner/edit/'.$banner->id)}}" method="POST" enctype="multipart/form-data">@csrf
            <div class="row">
              <div class="col-md-3 col-sm-4">
                <h4 class="title">Banner Image</h4>
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail">
                    <img src="{{asset('storage/images/admin/banner/'.$banner->image)}}" alt="{{$banner->alt}}">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                  <div>
                    <span class="btn btn-rose btn-file">
                      <span class="fileinput-new">Select image</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="image" />
                    </span>
                    <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="alt" class="form-control" value="{{$banner->alt}}" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="link" class="form-control" value="{{$banner->link}}" required>
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