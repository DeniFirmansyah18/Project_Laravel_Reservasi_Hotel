@extends('layouts.appuser')

@section('title', 'Hotel Hebat | Histori')

@section('content-header')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Histori Pemesanan</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Histori Pemesanan</a></li>
        <li class="breadcrumb-item active">Beranda</li>
      </ol>
    </div><!-- /.col -->
  </div>

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">


          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-12">
                <h4>
                  <i class="fas fa-globe"></i> Hotel Hebat.
                  <small class="float-right">Tanggal: {{ $pemesanan->created_at->toDateString() }}</small>
                </h4>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-4 invoice-col">
                Dari
                <address>
                  <strong>Hotel Hebat</strong><br>
                  Phone: (804) 123-5432<br>
                  Email: admin@hotelhebat.com
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                Kepada
                <address>
                  <strong>{{$pemesanan->nama_pemesan}}</strong><br>
                  Nama Tamu: {{$pemesanan->nama_tamu}}<br>
                  Phone: {{$pemesanan->no_telp}}<br>
                  Email: {{$pemesanan->email}}
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                <b>ID Pemesanan:</b> {{$pemesanan->id}}<br>
                <b>Tanggal Pemesanan:</b> {{ $pemesanan->created_at->toDateString() }}<br>
                <b>Waktu Pemesanan:</b> {{ $pemesanan->created_at->toTimeString() }}
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
              <div class="col-12 table-responsive">
                <table class="table table-striped">
                  <thead>
                  <tr>
                    <th>Jumlah Kamar</th>
                    <th>Tipe Kamar</th>
                    <th>Tanggal Check In</th>
                    <th>Tanggal Check Out</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>{{$pemesanan->jumlah_kamar}}</td>
                    <td>{{$pemesanan->kamar->tipe_kamar}}</td>
                    <td>{{$pemesanan->tgl_check_in}}</td>
                    <td>{{$pemesanan->tgl_check_out}}</td>
                    <td>{{$pemesanan->status}}</td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- /.row -->

            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-12">
                <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                <button type="button" id="print-invoice" class="btn btn-success float-right"><i class="fas fa-print"></i> Print</button>
              </div>
            </div>
          </div>
          <!-- /.invoice -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

<script>
    let print = document.getElementById('print-invoice')
    print.addEventListener('click', function() {
        window.print()
    })
</script>
@endsection