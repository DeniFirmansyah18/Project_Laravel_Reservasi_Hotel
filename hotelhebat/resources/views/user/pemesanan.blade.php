@extends('layouts.appuser')

@section('title', 'Hotel Hebat | Pemesanan')

@section('content-header')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Pemesanan</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Pemesanan</a></li>
        {{-- <li class="breadcrumb-item active">Kamar</li> --}}
      </ol>
    </div><!-- /.col -->
  </div>

@endsection

@section('content')

    <form action="/pemesanan" method="post">
    @csrf
    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
        <div class="form-row">
            <div class="control-group col-md-3">
                <label>Check-In</label>
                <div class="form-group">
                    <div class="input-group date" id="date-3" data-target-input="nearest">
                        <input type="date" class="form-control @error('tgl_check_in') is-invalid @enderror" name="tgl_check_in" value="{{ old('tgl_check_in') }}"/>
                        @error('tgl_check_in')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="input-group-append" data-target="#date-3" data-toggle="datetimepicker"></div>
                    </div>
                </div>
            </div>
            <div class="control-group col-md-3">
                <label>Check-Out</label>
                <div class="form-group">
                    <div class="input-group date" id="date-4" data-target-input="nearest">
                        <input type="date" class="form-control @error('tgl_check_out') is-invalid @enderror" name="tgl_check_out" value="{{ old('tgl_check_out') }}"/>
                        @error('tgl_check_out')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="input-group-append" data-target="#date-4" data-toggle="datetimepicker"></div>
                    </div>
                </div>
            </div>
            <div class="control-group col-md-3">
                <label for="nama_pelanggan" class="form-label">Nama Pemesan</label>
                <input type="text" class="form-control @error('nama_pemesan') is-invalid @enderror" name="nama_pemesan" value="{{ old('nama_pemesan') }}"/>
                @error('nama_pemesan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="control-group col-md-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="contoh@gmail.com" name="email" value="{{ old('email') }}"/>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="control-group col-md-3">
                <label for="no_telp" class="form-label">No Telp</label>
                <input type="text" class="form-control @error('no_telp') is-invalid @enderror" placeholder="+62 851xxxx" name="no_telp" value="{{ old('no_telp') }}"/>
                @error('no_telp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="control-group col-md-3">
                <label for="nama_tamu" class="form-label">Nama Tamu</label>
                <input type="text" class="form-control @error('nama_tamu') is-invalid @enderror" name="nama_tamu" value="{{ old('nama_tamu') }}"/>
                @error('nama_tamu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="control-group col-md-3">
                <label for="jumlah_kamar" class="form-label">Jumlah Kamar</label>
                <input type="text" class="form-control @error('jumlah_kamar') is-invalid @enderror" placeholder="Ex: 1" name="jumlah_kamar" value="{{ old('jumlah_kamar') }}"/>
                @error('jumlah_kamar')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="control-group col-md-3">
                <div class="form-row">
                    <div class="control-group col-md-6">
                        <label>Tipe Kamar</label>
                        <select class="custom-select @error('kamar_id') is-invalid @enderror" name="kamar_id">
                            <option value="" selected>Pilih</option>
                            @foreach ($kamar as $k)
                            <option value="{{ $k->id }}">{{ $k->tipe_kamar }}</option>
                            @endforeach
                        </select>
                        @error('kamar_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="control-group col-md-3">
                <button type="submit" class="btn btn-primary mt-3">Pesan Sekarang!</button>
            </div>
        </div>
    </div>
    </form>
    <div class="row mt-3 ml-2">
        <div class="col-md-15">
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
        </div>
    </div>
@endsection