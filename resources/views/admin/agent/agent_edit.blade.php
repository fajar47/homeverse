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

  .box-header .box-title {
    margin: 5px 0 0 15px;
  }

  .pull-right {
    text-align: right;
    margin: 5px 15px 0 0;
  }

  .invalid-feedback {
    width: 100%;
    margin-top: 0.25rem;
    font-size: .875em;
    color: #dc3545;
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
        <a href="{{URL::to('/agents')}}">
          <button type="button" class="btn btn-warning pull-right"> Back </button>
        </a>
      </div>
      <!-- /.box-header -->
      <div class="box-body ">
        <form role="form" action="{{URL::to('/agent-update/'.$edit->id)}}" method="post" enctype="multipart/form-data">
          @method('put')

          @csrf
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Name</label>

            <div class="col-sm-9">
              <input type="text" class="form-control m-5" name="nama_penjual" id="name" placeholder="Enter your Name" value="{{$edit->nama_penjual}}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Nomor</label>

            <div class="col-sm-9">
              <input type="number" class="form-control m-5" name="nomor_penjual" id="name" placeholder="Enter your Name" value="{{$edit->nomor_penjual}}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Email</label>

            <div class="col-sm-9">
              <input type="email" class="form-control m-5" name="email_penjual" id="name" placeholder="Enter your Name" value="{{$edit->email_penjual}}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">WhatsApp</label>

            <div class="col-sm-9">
              <input type="number" class="form-control m-5" name="whatsapp_penjual" id="name" placeholder="Enter your Name" value="{{$edit->whatsapp_penjual}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-sm-3 m-5 control-label m-5">Facebook</label>

            <div class="col-sm-9">
              <input type="text" class="form-control m-5 " name="facebook_penjual" id="email" placeholder="Enter email address" value="{{$edit->facebook_penjual}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Instagram</label>

            <div class="col-sm-9">
              <input type="text" class="form-control m-5 " name="instagram_penjual" id="password" placeholder="Enter password" value="{{$edit->instagram_penjual}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Tiktok</label>

            <div class="col-sm-9">
              <input type="text" class="form-control m-5" name="tiktok_penjual" id="name" placeholder="Enter your Name" value="{{$edit->tiktok_penjual}}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Foto</label>

            <div class="col-sm-9">
              <input type="file" class="form-control m-5" name="foto_penjual" id="name" placeholder="Enter your Name" value="{{$edit->foto_penjual}}" accept="image/*">
            </div>
          </div>


          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <input type="submit" class="btn btn-success" value="Submit">
            </div>
          </div>
        </form>
      </div>
      <!-- /.box-body -->
    </div>
  </section>
</div>

@endsection