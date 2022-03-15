@extends('backend.layouts.app')

@push('style')

@endpush

@section('content')
<div class="container-fluid">
  <div class="row ">
    <div class="col-md-6 m-auto">
      <div class="card">
        <div class="card-header card-header-icon card-header-rose">
          <div class="card-icon">
            <i class="material-icons">add_task</i>
          </div>
          <h4 class="card-title">EDIT NEW EVENT
          </h4>
        </div>
        <div class="card-body">
          <form action="{{url('b2b/tradeShow/edit/'.$show->id)}}" method="POST" enctype="multipart/form-data">@csrf
            <div class="row">
              <div class="col-md-3 col-sm-4">
                <h4 class="title">Event Banner</h4>
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail">
                    <img src="{{asset('storage/images/admin/show/'.$show['image'])}}" alt="NO image avialable">
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
              <div class="col-md-8">
                <div class="form-group">
                  <label class="bmd-label-floating">Enter event name</label>
                  <input type="text" name="show_name" class="form-control" value="{{$show->show_name}}" required>
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group" >
                  <label class="bmd-label-floating">Enter venue name</label>
                  <input type="text" name="venue" class="form-control" value="{{$show->venue}}" required>
                </div>
              </div>
              <div class="col-md-8 my-5">
                <div class="form-group">
                  <label class="bmd-label-floating">Event description </label>
                  <textarea  id="editor" name="ev_description" class="form-control" placeholder="Make event description">{{$show->ev_description}}</textarea>
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group" >
                  <label class="bmd-label-floating">Organization Profile</label>
                  <input type="text" name="org_profile" class="form-control" value="{{$show->org_profile}}" required>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-rose pull-right">Update</button>
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