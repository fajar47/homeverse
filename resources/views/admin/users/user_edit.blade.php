@extends('admin.layouts.app')

@section('content')

<style>
  .box {
    width: 500px;
    margin: auto;
  }

  .m-5 {
    margin: 5px 0;
  }

  .add__users {
    position: fixed;
    top: 5px;
    right: 5px;
    color: red;
    background-color: aqua;
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
        <h3 class="box-title">Edit User</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body ">
        <form role="form" action="{{URL::to('/user-update/'.$edit->id)}}" method="post">
          @csrf

          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Name</label>

            <div class="col-sm-9">
              <input type="text" class="form-control m-5" name="name" id="name" placeholder="Enter your Name" value="{{$edit->name}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-sm-3 m-5 control-label m-5">Email</label>

            <div class="col-sm-9">
              <input type="email" class="form-control m-5" name="email" id="email" placeholder="Enter email address" value="{{$edit->email}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Password</label>

            <div class="col-sm-9">
              <input type="password" class="form-control m-5" name="password" id="password" placeholder="Enter password" value="{{$edit->password}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputExperience" class="col-sm-3 control-label m-5">Role</label>

            <div class="col-sm-9">
              <select class="form-control m-5" name="role" id="role">
                <option value="Admin" {{'Admin' == $edit->role ? 'selected' : ''}}> Admin </option>
                <option value="Manager" {{'Manager' == $edit->role ? 'selected' : ''}}> Manager </option>
                <option value="Customer" {{'Customer' == $edit->role ? 'selected' : ''}}> Customer </option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <button type="submit" class="btn btn-danger">Submit</button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.box-body -->
    </div>
  </section>
</div>

@endsection