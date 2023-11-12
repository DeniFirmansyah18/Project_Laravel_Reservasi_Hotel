<header id="header">
            <a href="index.html" class="logo"><img src="img/logo.png" alt="logo"></a>
            <div class="mobile-menu-btn"><i class="fa fa-bars"></i></div>
            <nav class="main-menu top-menu">
                <ul>
                    <li><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a></li>
                    <li><a class="nav-link {{ Request::is('/tentang') ? 'active' : '' }}" href="/tentang">Tentang Kami</a></li>
                    <li><a class="nav-link {{ Request::is('kamar-detail') ? 'active' : '' }}"href="/kamar-detail">Kamar</a></li>
                    <li><a class="nav-link {{ Request::is('fasilitas') ? 'active' : '' }}"href="/fasilitas">Fasilitas Hotel</a></li>
                    @guest
                    <li class="ms-auto"><a href="/dashboard"><i class="fa fa-user mr-2"></i>Login</a></li>
                    @else

                    @if (Auth::user()->role === 'user')
                    <li><a href="/home"><i class="fa fa-user mr-2"></i>{{ Auth::user()->name}}</a></li>
                    @elseif (Auth::user()->role === 'resepsionis')
                    <li><a href="/resepsionis"><i class="fa fa-user mr-2"></i>{{ Auth::user()->name}}</a></li>
                    @elseif (Auth::user()->role === 'admin')
                    <li><a href="/dashboard"><i class="fa fa-user mr-2"></i>{{ Auth::user()->name}}</a></li>
                    @endif
                    
                    @endguest
                </ul>
            </nav>
        </header>
        <div id="headerSlider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
                <li data-target="#headerSlider" data-slide-to="1"></li>
                <li data-target="#headerSlider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slider/header-slider-1.jpg" alt="Royal Hotel">
                </div>
                
                <div class="carousel-item">
                    <img src="img/slider/header-slider-2.jpg" alt="Royal Hotel">
                </div>

                <div class="carousel-item">
                    <img src="img/slider/header-slider-3.jpg" alt="Royal Hotel">
                </div>
            </div>

            <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>