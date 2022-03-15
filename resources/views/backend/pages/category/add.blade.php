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
          <form action="{{url('b2b/category/add')}}" method="POST">@csrf
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label class="bmd-label-floating">Category Name </label>
                  <input type="text" name="name" class="form-control" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <h4 class="title">Select Category</h4>
                <div class="col-lg-8 col-md-8 col-sm-8">
                  <select class="selectpicker" data-size="12" data-style="btn btn-rose" title="Single Select" name="parent_id">
                    <option disabled selected>Single Option</option>
                    <option value="0">Main Category</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
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
<script>
</script>
@endpush