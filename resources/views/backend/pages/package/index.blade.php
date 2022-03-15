@extends('backend.layouts.app')

@push('style')
    
@endpush

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
            <i class="material-icons">visibility</i>
          </div>
          <h4 class="card-title">Packages Table</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Features</th>
                  <th>Details</th>
                  <th class="text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                @php
                   $i = 0;
                @endphp
                @foreach ($packages as $package)
                <tr>
                  <?php $i++; ?>
                  <td class="text-center">{{$i}}</td>
                  <td><img style="height: 50px; width:50px; border-radius:50%;" src="{{asset('storage/images/admin/package/'.$package['image'])}}" alt=""></td>
                  <td>{{$package['name']}}</td>
                  <td >৳ {{$package['price']}}</td>
                  <td >
                    @foreach (json_decode($package->features, true) as $key => $value)
                      <b>{{ $key }} :</b>@if ($value==0) No @else Yes @endif <br />
                    @endforeach
                  </td>
                  <td width="300px">{!! Str::limit($package['details'],150) !!}</td>
                  <td class="td-actions text-right">
                    @if ($package['status']==0)
                    <a  class="btn btn-info updatePackageStatus" title="Turn off / On" id="package-{{$package->id}}" package_id="{{$package->id}}" style="color: #fff">
                    <i class="material-icons" status="desable">toggle_off</i>
                    </a>
                    @else
                    <a  class="btn btn-info updatePackageStatus" title="Turn off / On" id="package-{{$package->id}}" package_id="{{$package->id}}" style="color: #fff">
                      <i class="material-icons" status="Active">toggle_on</i>
                    </a>
                    @endif
                    <a href="{{url('b2b/package/edit',$package->id)}}"  class="btn btn-rose" title="Edit" style="color: #fff">
                      <i class="material-icons">edit</i>
                    </a>
                    <a href="{{url('b2b/package/delete',$package->id)}}" name="package" class="btn btn-danger confirmDelete" title="Delete" style="color: #fff">
                      <i class="material-icons">close</i>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
</div>
@stop

@push('script')
   
@endpush