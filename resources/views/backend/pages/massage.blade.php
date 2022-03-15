@extends('backend.layouts.app')

@push('style')
    
@endpush

@section('content')
<div class="col-lg-9 col-md-12">
    <div class="card">
      <div class="card-header card-header-tabs card-header-rose">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <span class="nav-tabs-title">Tasks:</span>
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link" href="#profile" data-toggle="tab">
                  <i class="material-icons">person</i>From: {{$massage->name}}
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#messages" data-toggle="tab">
                  <i class="material-icons">email</i> Email: {{$massage->email}}
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#settings" data-toggle="tab">
                  <i class="material-icons">call</i> Phone: {{$massage->phone}}
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#settings" data-toggle="tab">
                  <i class="material-icons">cloud</i> Email: {{$massage->email}}
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#settings" data-toggle="tab">
                  <i class="material-icons">cloud</i> Company
                  <div class="ripple-container"></div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane active" id="profile">
            <table class="table">
              <tbody>
                <tr>
                  <td> Massage: &nbsp;&nbsp;&nbsp; <span style="color: red">{{$massage->question}}</span></td>
                  <td class="td-actions text-right">
                    <a href="{{url('b2b/contact/delete',$massage->id)}}" rel="tooltip" name="Massage" title="Remove" class="btn btn-danger btn-link btn-sm confirmDelete">
                      <i class="material-icons">close</i>
                    </a>
                  </td>
                </tr>
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