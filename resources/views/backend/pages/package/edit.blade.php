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
            <i class="material-icons">draw</i>
          </div>
          <h4 class="card-title">Edit new package
          </h4>
        </div>
        <div class="card-body">
          <form action="{{url('b2b/package/add')}}" method="POST" enctype="multipart/form-data">@csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Package Name</label>
                  <input type="text" name="name" class="form-control" value="{{$package->name}}" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Price</label>
                  <input type="number" name="price" class="form-control" value="{{$package->price}}" required>
                </div>
              </div>
            </div>
            <h3>Package Features:</h3>
            <div class="form-group mt-3">
              <div class="row">
                  <div class="col-md-6">
                      <b>Name:</b>
                  </div>
                  <div class="col-md-6">
                      <b>Availability:</b>
                  </div>
              </div>
              @php
              $count= count(json_decode($package->features, true));
              @endphp
              
              <div class="field_wrapper">
                <div class="row">
                  {{-- @for($i=0; $i<=$count; $i++) --}}
                  @foreach (json_decode($package->features, true) as $key=>$pack)
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" name="key[]" class="form-control" required value="{{$key}}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <select class="form-control" name="value[]" required value="">
                          <option value="">Select</option>
                          <option value="1" @if ( $pack==1) selected @endif>Yes</option>
                          <option value="0" @if ( $pack==0) selected @endif>>No</option>
                        </select>
                      </div>
                    </div>
                  @endforeach
                  {{-- @endfor --}}
                    <a href="javascript:void(0);" class="add_button btn btn-rose" title="Add Field">ADD</a>
                  </div>
                </div>
              </div>
            <div class="row">
              <div class="col-md-6 mt-5">
                <div class="form-group">
                  <textarea name="details" id="editor" class="form-control" placeholder="Insert package details">{{$package->details}}</textarea>
                </div>
              </div>
              <div class="col-md-6">
              </div>
              <div class="col-md-3 col-sm-4">
                <h4 class="title">Avatar</h4>
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail">
                    <img src="{{asset('storage/images/admin/package/'.$package['image'])}}" alt="...">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                  <div>
                    <span class="btn btn-round btn-rose btn-file">
                      <span class="fileinput-new">Change Image</span>
                      <input type="file" name="image" />
                    </span>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <button type="submit" class="btn btn-rose pull-right">Confirm</button>
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