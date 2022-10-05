@extends('admin.layouts.app')

@section('content')
<style>
  .box-title div {
    display: inline-flex;
    justify-content: space-between;
    margin: auto;
  }
</style>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Blank page
      <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="box">
      <div class="box-header">
        <div class="box-title">
          <div class="title-users">
            <h3>Data Table With Full Features</h3>
          </div>
          <div class="add-users">
            <a href="{{URL::to('/users-add')}}">
              <h3>add users</h3>
            </a>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
          <div class="row">
            <div class="col-sm-12">
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr role="row">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($all as $key=>$row)
                  <tr role="row" class="odd">
                    <td>{{ $key+1}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->role}}</td>
                    <td>
                      <a href="{{URL::to('/users-edit/'.$row->id)}}" class="btn btn-sm btn-info">Edit</a>
                      <a href="{{URL::to('/user-delete/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
  </section>
</div>

@endsection