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
          <h4 class="card-title">Top Menu  Items</h4>
          <a class="btn btn-rose float-right" href="{{url('b2b/top_menu/add')}}">ADD NEW</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Title</th>
                  <th>Details</th>
                  <th>Link</th>
                  <th class="text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                @php
                   $i = 0;
                @endphp
                @foreach ($datas as $data)
                <tr>
                  <?php $i++; ?>
                  <td class="text-center">{{$i}}</td>
                  <td>{{$data['title']}}</td>
                  <td>{{$data['type']}}</td>
                  <td>{{$data['color']}}</td>
                  <td>
                    @if ($data['custom_url']=="")
                      Static
                      @else
                      {{$data['custom_url']}}
                    @endif
                  </td>
                  <td class="td-actions text-right">
                    <a href="{{url('b2b/top_menu/edit',$data->id)}}"  class="btn btn-rose" title="Edit" style="color: #fff">
                      <i class="material-icons">edit</i>
                    </a>
                    <a href="{{url('b2b/top_menu/delete',$data->id)}}" name="data" class="btn btn-danger confirmDelete" title="Delete" style="color: #fff">
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