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

  .add__users {
    position: fixed;
    top: 5px;
    right: 5px;
    color: red;
    background-color: aqua;
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
        <a href="{{URL::to('/users')}}">
          <button type="button" class="btn btn-warning pull-right"> Back </button>
        </a>
      </div>
      <!-- /.box-header -->
      <div class="box-body ">
        <form role="form" action="/admin/properti-store" method="post">
          @csrf

          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Nama Penjual</label>

            <div class="col-sm-9">
              <input type="text" class="form-control m-5 " name="nama_penjual" id="name_penjual" placeholder="Enter your Name" autofocus="true" value="">
              
            </div>
          </div>

          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Foto Penjual</label>

            <div class="col-sm-9">
              <input type="file" class="form-control m-5" name="foto_penjual" id="foto_penjual" placeholder="Enter your Name" autofocus="true" value="">
              
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
            <label for="inputName" class="col-sm-3 control-label m-5">Foto Utama </label>

            <div class="col-sm-9">
              <input type="file" class="form-control m-5" name="foto_utama" placeholder="" autofocus="true" value="">
              
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Foto ke 1 </label>

            <div class="col-sm-9">
              <input type="file" class="form-control m-5" name="foto_1" placeholder="" autofocus="true" value="">
              
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Foto ke 2 </label>

            <div class="col-sm-9">
              <input type="file" class="form-control m-5" name="foto_2" placeholder="" autofocus="true" value="">
              
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Foto ke 3 </label>

            <div class="col-sm-9">
              <input type="file" class="form-control m-5" name="foto_3" placeholder="" autofocus="true" value="">
              
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Foto ke 4 </label>

            <div class="col-sm-9">
              <input type="file" class="form-control m-5" name="foto_4" placeholder="" autofocus="true" value="">
              
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Foto ke 5 </label>

            <div class="col-sm-9">
              <input type="file" class="form-control m-5" name="foto_5" placeholder="" autofocus="true" value="">
              
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Tipe </label>

            <div class="col-sm-9">
              <select name="tipe" id="">
                <option value="Sell">Sell</option>
                <option value="Rent">Rent</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Harga </label>
            <div class="col-sm-6">
              <input type="number" class="form-control m-5" name="harga" placeholder="" autofocus="true" value="">              
            </div>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Tipe Rumah </label>
            <div class="col-sm-9">
              <input type="text" class="form-control m-5" name="tipe_rumah" placeholder="" autofocus="true" value="">              
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label m-5">Kasur </label>

            <div class="col-sm-9">
              <input type="text" class="form-control m-5" name="kasur" placeholder="" autofocus="true" value="">              
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-3 control-label m-5">Kamar Mandi </label>

            <div class="col-sm-9">
              <input type="text" class="form-control m-5" name="kamar_mandi" placeholder="" autofocus="true" value="">              
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-3 control-label m-5">Kondisi Rumah </label>

            <div class="col-sm-9">
              <input type="text" class="form-control m-5" name="kondisi_rumah" placeholder="" autofocus="true" value="">              
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label m-5">Kenyamanan Rumah </label>

            <div class="col-sm-9">
              <input type="text" class="form-control m-5" name="kenyamanan_rumah" placeholder="" autofocus="true" value="">              
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-3 control-label m-5">Stok Rumah</label>

            <div class="col-sm-9">
              <input type="number" class="form-control m-5" name="stok" placeholder="" autofocus="true" value="">              
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-3 control-label m-5">Lokasi</label>

            <div class="col-sm-9">
              <input type="text" class="form-control m-5" name="lokasi" placeholder="" autofocus="true" value="">              
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-3 control-label m-5">Deskripsi</label>

            <div class="col-sm-9">
              <textarea type="text" class="form-control m-5" name="deskripsi" placeholder="" autofocus="true" value=""></textarea>              
            </div>
          </div>
          
          
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <input type="submit"  name="submit" class="btn btn-danger" value="Submit">
            </div>
          </div>
        </form>
      </div>
      <!-- /.box-body -->
    </div>
  </section>
</div>

@endsection