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
          <h4 class="card-title">Trade Shows</h4>
          <a class="btn btn-rose float-right" href="{{url('b2b/tradeShow/add')}}">ADD NEW</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Vanue</th>
                  <th>Organizer</th>
                  <th>About Event</th>
                  <th class="text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                @php
                   $i = 0;
                @endphp
                @foreach ($shows as $show)
                <tr>
                  <?php $i++; ?>
                  <td class="text-center">{{$i}}</td>
                  <td><img style="height: 80px; width:150px; border-radius:10%;" src="{{asset('storage/images/admin/show/'.$show['image'])}}" alt=""></td>
                  <td>{{$show['show_name']}}</td>
                  <td>{{$show['venue']}}</td>
                  <td>{{$show['org_profile']}}</td>
                  <td>{!! Str::limit($show['ev_description'],70) !!}</td>
                  <td class="td-actions text-right">
                    <a href="{{url('b2b/tradeShow/edit',$show->id)}}"  class="btn btn-rose" title="Edit" style="color: #fff">
                      <i class="material-icons">edit</i>
                    </a>
                    <a href="{{url('b2b/tradeShow/delete',$show->id)}}" name="event" class="btn btn-danger confirmDelete" title="Delete" style="color: #fff">
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