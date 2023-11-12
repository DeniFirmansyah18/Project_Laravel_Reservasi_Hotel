@extends('layouts.main')

@section('container')

<main class="mt-5">

<div id="rooms">
    <div class="container">
        <div class="section-header">
            <h1>Fasilitas Hotel</h1>
            <p>
                Berbagai Fasilitas Unggulan Yang Kami Sediakan Untuk Anda
            </p>
        </div>
        <div class="row">
            <div class="col-md-12">
                @foreach ($fasilitasHotel as $fh)
                <div class="row">
                    <div class="col-md-3">
                        <div class="room-img">
                            <div class="box12">
                                <img src="/storage/{{$fh->image}}">
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
                            <h2><div style="font-size:30px">{{$fh->nama_fasilitas}}</div></h2>
                            <div style="margin: 30px" style="font-size:180px">{{$fh->keterangan}}</div>
                            <ul class="room-size">
                                <li><i class="fa fa-star-o" style="font-size:15px">Kamar</i></li>
                                <li><i class="fa fa-arrow-right"></i>Standart</li>
                                <li><i class="fa fa-arrow-right"></i>Superior</li>
                            </ul>
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