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
          <h3>Data Table With Full Features</h3>
          <a href="{{URL::to('properti-add')}}">
            <button type="button" class="btn btn-primary">Add Properties</button>
          </a>
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
                    <th>Nama Penjual</th>
                    <th>Foto Penjual</th>
                    <th>Email Penjual</th>
                    <th>Nomor Penjual</th>
                    <th>Facebook Penjual</th>
                    <th>WhatsApp Penjual</th>
                    <th>Instagram Penjual</th>
                    <th>Foto Utama</th>
                    <th>Foto 1</th>
                    <th>Foto 2</th>
                    <th>Foto 3</th>
                    <th>Foto 4</th>
                    <th>Foto 5</th>
                    <th>Tipe Sewa/Jual</th>
                    <th>Harga Rumah</th>
                    <th>Tipe Rumah</th>
                    <th>Kasur</th>
                    <th>Kamar Mandi</th>
                    <th>Kondisi Rumah</th>
                    <th>Kenyamanan Rumah</th>
                    <th>Stok</th>
                    <th>Lokasi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($all as $key=>$row)
                  <tr role="row" class="odd">
                    <td>{{ $key+1}}</td>
                    <td>{{$row->nama_penjual}}</td>
                    <td>{{$row->foto_penjual}}</td>
                    <td>{{$row->email_penjual}}</td>
                    <td>{{$row->nomor_Penjual}}</td>
                    <td>{{$row->facebook_penjual}}</td>
                    <td>{{$row->whatsApp_penjual}}</td>
                    <td>{{$row->instagram_penjual}}</td>
                    <td>{{$row->foto_utama}}</td>
                    <td>{{$row->foto_1}}</td>
                    <td>{{$row->foto_2}}</td>
                    <td>{{$row->foto_3}}</td>
                    <td>{{$row->foto_4}}</td>
                    <td>{{$row->foto_5}}</td>
                    <td>{{$row->tipe}}</td>
                    <td>{{$row->harga}}</td>
                    <td>{{$row->tipe_rumah}}</td>
                    <td>{{$row->kasur}}</td>
                    <td>{{$row->kamar_mandi}}</td>
                    <td>{{$row->kondisi_rumah}}</td>
                    <td>{{$row->kenyamanan_rumah}}</td>
                    <td>{{$row->stok}}</td>
                    <td>{{$row->lokasi}}</td>
                    <td>{{$row->deskripsi}}</td>
                    <td>
                      <a href="" class="btn btn-sm btn-info">Edit</a>
                      <a href="" class="btn btn-sm btn-danger" id="delete">Delete</a>
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