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
          <h4 class="card-title">Banners Table</h4>
          <a class="btn btn-rose float-right" href="{{url('b2b/component/banner/add')}}">ADD NEW</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Image</th>
                  <th>link</th>
                  <th>alt</th>
                  <th class="text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                @php
                   $i = 0;
                @endphp
                @foreach ($banners as $banner)
                <tr>
                  <?php $i++; ?>
                  <td class="text-center">{{$i}}</td>
                  <td><img style="height: 80px; width:150px; border-radius:10%;" src="{{asset('storage/images/admin/banner/'.$banner['image'])}}" alt=""></td>
                  <td width="300px">{{ Str::limit($banner['link'],70) }}</td>
                  <td>{{$banner['alt']}}</td>
                  <td class="td-actions text-right">
                    @if ($banner['status']==0)
                    <a  class="btn btn-info updateBannerStatus" title="Turn off / On" id="banner-{{$banner->id}}" banner_id="{{$banner->id}}" style="color: #fff">
                    <i class="material-icons" status="desable">toggle_off</i>
                    </a>
                    @else
                    <a  class="btn btn-info updateBannerStatus" title="Turn off / On" id="banner-{{$banner->id}}" banner_id="{{$banner->id}}" style="color: #fff">
                      <i class="material-icons" status="Active">toggle_on</i>
                    </a>
                    @endif
                    <a href="{{url('b2b/component/banner/edit',$banner->id)}}"  class="btn btn-rose" title="Edit" style="color: #fff">
                      <i class="material-icons">edit</i>
                    </a>
                    <a href="{{url('b2b/component/banner/delete',$banner->id)}}" name="banner" class="btn btn-danger confirmDelete" title="Delete" style="color: #fff">
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