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
          <h4 class="card-title">EDIT MENU ITEM
          </h4>
        </div>
        <div class="card-body">
          <form action="{{url('b2b/top_menu/edit/'.$data->id)}}" method="POST">@csrf
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 mb-5">
                  <h4 class="title">Select Menu type</h4>
                  <select class="selectpicker" data-size="12" data-style="btn btn-rose" title="Single Select" name="type">
                    @foreach ($types as $type)
                    <option value="{{$type}}" @if ($data->type==$type) selected @endif>{{$type}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <input type="text" name="custom_url" class="form-control" value="{{$data->custom_url}}" required>
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <input type="text" name="title" class="form-control" value="{{$data->title}}" required>
                </div>
              </div>
              <div class="col-md-8">
                <div style="width: 60px; height:40px; background-color:{{$data->color}};  border-radius: 7px;"></div>
                <div class="form-group">
                  <input type="text" name="color" class="form-control" value="{{$data->color}}" required>
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