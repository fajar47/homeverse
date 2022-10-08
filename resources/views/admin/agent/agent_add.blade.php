@extends('admin.layouts.app')

@section('content')

<style>
  .box {
    width: 800px;
    margin: auto;
  }

  .m-5 {
    margin: 5px 0;
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
        <h3 class="box-title">Add User</h3>
        <a href="{{URL::to('/agent')}}">
          <button type="button" class="btn btn-warning pull-right"> Back </button>
        </a>
      </div>
      <!-- /.box-header -->
      <div class="box-body ">
        <form role="form" action="agent-insert" method="post" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Nama Penjual</label>

            <div class="col-sm-9">
              <input type="text" class="form-control m-5 " name="nama_penjual" id="name_penjual" placeholder="Enter your Name" autofocus="true" value="">

            </div>
          </div>

          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5 @error('foto_penjual', 'post') is-invalid @enderror">Foto Penjual</label>

            <div class="col-sm-9">
              <input type="file" class="form-control m-5" name="foto_penjual" id="foto_penjual" placeholder="Enter your Name" autofocus="true" value="" accept="image/*">
              @error('foto_penjual')
              <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Email Penjual</label>

            <div class="col-sm-9">
              <input type="email" class="form-control m-5" name="email_penjual" id="email_penjual" placeholder="Enter your Name" autofocus="true" value="">

            </div>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Nomor Penjual</label>

            <div class="col-sm-9">
              <input type="number" class="form-control m-5" name="nomor_penjual" id="nomor_penjual" placeholder="Enter your Name" autofocus="true" value="">

            </div>
          </div>

          <div class="form-group">
            <label for="facebook" class="col-sm-3 control-label m-5">Facebook Penjual</label>

            <div class="col-sm-9">
              <input type="text" class="form-control m-5" name="facebook_penjual" id="facebook" placeholder="" autofocus="true" value="">

            </div>
          </div>

          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">WhatsApp Penjual</label>

            <div class="col-sm-9">
              <input type="number" class="form-control m-5" name="whatsapp_penjual" placeholder="" autofocus="true" value="">

            </div>
          </div>

          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Instagram Penjual</label>

            <div class="col-sm-9">
              <input type="text" class="form-control m-5" name="instagram_penjual" placeholder="" autofocus="true" value="">

            </div>
          </div>

          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Tiktok Penjual</label>

            <div class="col-sm-9">
              <input type="text" class="form-control m-5" name="tiktok_penjual" placeholder="" autofocus="true" value="">

            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <input type="submit" name="submit" class="btn btn-danger" value="Submit">
            </div>
          </div>
        </form>
      </div>
      <!-- /.box-body -->
    </div>
  </section>
</div>

@endsection