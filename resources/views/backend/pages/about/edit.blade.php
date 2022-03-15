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
          <h4 class="card-title">EDIT ABOUT
          </h4>
        </div>
        <div class="card-body">
          <form action="{{url('b2b/about/edit/'.$data->id)}}" method="POST">@csrf
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <input type="text" name="title" class="form-control" value="{{$data->title}}" required>
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <input type="text" name="link" class="form-control" value="{{$data->link}}" required>
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <textarea  id="editor" name="details" class="form-control">{{$data->details}}</textarea>
                </div>
              </div>
            </div>
            </div>
            <button type="submit" class="btn btn-rose mt-5">Update</button>
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