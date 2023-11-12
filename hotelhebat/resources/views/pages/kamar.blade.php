@extends('layouts.main')

@section('container')

<main class="mt-5">

<div id="rooms">
    <div class="container">
        <div class="section-header">
            <h2>Kamar</h2>
            <p>
                Berbagai Fasilitas Unggulan Yang Kami Sediakan Untuk Anda
            </p>
        </div>
        <div class="row">
            <div class="col-md-12">
                @foreach ($kamar as $k)
                <div class="row">
                    <div class="col-md-3">
                        <div class="room-img">
                            <div class="box12">
                                <img src="/storage/{{$k->image}}">
                                <div class="box-content">
                                    <h3 class="title">Standard Single</h3>
                                    <ul class="icon">
                                        <li><a href="#" data-toggle="modal" data-target="#modal-id"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="room-des">
                            <h1><div style="font-size:30px">{{$k->tipe_kamar}}</div></h1>
                            <ul class="room-size">
                                <li><i class="fa fa-star-o" style="font-size:15px">Fasilitas</i></li>
                                @foreach ($fasilitasKamar->where('kamar_id', $k->id) as $fk)
                                <li><i class="fa fa-arrow-right"></i>{{$fk->nama_fasilitas}}</li>
                                @endforeach
                            </ul>
                            <ul class="room-icon">
                                <li class="icon-2"></li>
                                <li class="icon-3"></li>
                                <li class="icon-6"></li>
                                <li class="icon-7"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="room-rate">
                            @if (Auth::check() && Auth::user()->role === 'user')
                            <a href="/pemesanan">Book Now</a>
                            @else
                            <a href="/login">Book Now</a>
                            @endif
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>
</main>
@endsection