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
          <h4 class="card-title">ADD NEW MENU ITEM
          </h4>
        </div>
        <div class="card-body">
          <form action="{{url('b2b/top_menu/add')}}" method="POST">@csrf
              <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 mb-5">
                  <h4 class="title">Select Menu type</h4>
                  <select class="selectpicker" data-size="12" data-style="btn btn-rose" title="Single Select" name="type">
                    <option disabled selected>Single Option</option>
                    <option  value="">Select item type</option>
                    @foreach ($types as $type)
                    <option value="{{$type}}">{{$type}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <label class="bmd-label-floating">Custom url </label>
                  <input type="text" name="custom_url" class="form-control" required>
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <label class="bmd-label-floating">Menu title </label>
                  <input type="text" name="title" class="form-control" required>
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <label class="bmd-label-floating">Give a menu item color</label>
                  <input type="text" name="color" class="form-control" required>
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