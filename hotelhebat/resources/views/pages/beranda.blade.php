@extends('layouts.main')

@section('container')
        <!-- Search Section End -->
        
        <!-- Welcome Section Start -->
        <div id="welcome">
            <div class="container">
                <h3>Selamat Datang Di Hotel Hebat</h3>
                <p>Harga Terbaik Untuk Penyedia Fasilitas Hotel Terlengkap!<br>Nikmatilah Liburanmu Sekarang Juga</p>
                @if (Auth::check() && Auth::user()->role === 'user')
                <a href="/pemesanan">Book Now</a>
                @else
                <a href="/login">Book Now</a>
                @endif
            </div>
        </div>
        <!-- Welcome Section End -->

        <!-- Amenities Section Start -->
        <div id="amenities" class="home-amenities">
            <div class="container">
                <div class="section-header">
                    <h2>Fasilitas & Pelayanan</h2>
                    <p>
                        Berbagai Fasilitas & Pelayanan Telah Tersedia Di hotel Kami.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-2"></i>
                        <h3>AC</h3>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-3"></i>
                        <h3>Pemandian</h3>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-6"></i>
                        <h3>Televisi</h3>
                    </div>
                    <div class="col-md-3 col-sm-6 icons">
                        <i class="icon icon-7"></i>
                        <h3>Free WiFi</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Amenities Section Start -->
        
        <!-- Room Section Start -->
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
        <!-- Room Section End -->

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
        
        <!-- Modal for Room Section Start -->
        <div id="modal-id" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="port-slider">
                                    <div><img src="img/room-slider/room-1.jpg"></div>
                                    <div><img src="img/room-slider/room-2.jpg"></div>
                                    <div><img src="img/room-slider/room-3.jpg"></div>
                                    <div><img src="img/room-slider/room-4.jpg"></div>
                                    <div><img src="img/room-slider/room-5.jpg"></div>
                                    <div><img src="img/room-slider/room-6.jpg"></div>
                                </div>
                                <div class="port-slider-nav">
                                    <div><img src="img/room-slider/room-1.jpg"></div>
                                    <div><img src="img/room-slider/room-2.jpg"></div>
                                    <div><img src="img/room-slider/room-3.jpg"></div>
                                    <div><img src="img/room-slider/room-4.jpg"></div>
                                    <div><img src="img/room-slider/room-5.jpg"></div>
                                    <div><img src="img/room-slider/room-6.jpg"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <h2>Lorem ipsum dolor</h2>
                                <p>
                                    Lorem ipsum dolor viverra purus imperdiet rhoncus imperdiet. Suspendisse vulputate condimentum ligula sollicitudin hendrerit. Phasellus luctus, elit et ultrices interdum, neque mi pellentesque massorci. Nam in cursus ex, nec mattis lectus. Curabitur quis elementum nunc. Mauris iaculis, justo eu aliquam sagittis, arcu eros cursus libero, sit amet eleifend dolor odio at lacus. 
                                </p>
                                <div class="modal-link">
                                    <a href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Room Section End -->
        
        <!-- Subscribe Section Start -->

        <!-- Subscribe Section End -->
        
        <!-- Call Section Start -->
        <div id="call-us">
            <div class="container">
                <div class="section-header">
                    <h2>Hubungi Kami</h2>
                    <p>
                        Pertanyaan Lebih Lanjut Dan layanan Customer Bisa Hubungi Nomor Tertera.
                    </p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="tel:+12345678900">0312 2345 2345</a>
                    </div>
                </div>
            </div>
        </div>
@endsection