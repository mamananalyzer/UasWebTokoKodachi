<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Lora&display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-1/css/all.min.css')}}">


    <link rel="icon" href="{{url('img/aii.png')}}">
    <title>@yield('title')</title>
  </head>
  <body>
    {{-- header --}}
    <nav class="navbarbar navbar navbar-expand-lg navbar-dark bg-blue sticky-top">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
        Amptron Instrumindo
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form method="GET" action="{{ url('/products') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
          <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav navbar-right offset-md-1">
          <a class="nav-item nav-link pr-4" href="{{ url('/') }}">Home</a>
          <a class="nav-item nav-link pr-4" href="{{ url('/about') }}">About</a>
          <a class="nav-item nav-link pr-4" href="{{ url('/principal') }}">Principal</a>
          <a class="nav-item nav-link pr-4" href="{{ url('/contact') }}">Contact Us</a>
          <div class="dropdown">
            <a class="nav-item nav-link pr-4" href="{{ url('/underconstruction') }}">Product</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{ url('/product') }}">List Product</a>
              <a class="dropdown-item" href="{{ url('/login') }}">Admin</a>
            </div>
          </div>
            {{-- <li class="dropdown">
                <a href="#" class="nav-item nav-link pr-4" data-toggle="dropdown"><img width="30" src="{{asset('assets/img/user.png')}}" class="img-circle" alt="Avatar"> <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                    <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                    <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
                    <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                </ul>
            </li> --}}

          {{-- <a class="nav-item nav-link pr-4" href="{{ url('/products') }}">Product</a> --}}
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div> --}}
          {{-- </li> --}}
        </ul>
      </div>
    </nav>
    {{-- end header --}}


    @yield('container')


    {{-- footer --}}
    <div class="row mr-auto text-left text-light bg-grey pl-5 pr-5 mt-2 pt-5 pb-1">
        <div class="col-md-3">
            <h6>JAM KERJA</h6>
            <hr class="bg-warning">
            <div class="row">
              <div class="col-1 mr-4">
                <object data="{{url('img/work.svg')}}" type="{{url('img/work.svg')}}">
                  <img src="{{url('img/work.svg')}}"/>
                </object>
              </div>
              <div class="col-10">
                <p>Senin - Jum'at : 08.15 - 17.15</p>
                <p>Sabtu - Minggu : Tutup</p>
              </div>
            </div>

        </div>
        <div class="col-md-3">
            <h6>BERITA TERKINI</h6>
            <hr class="bg-warning">
        </div>
        <div class="col-md-3">
            <h6>SITEMAP</h6>
            <hr class="bg-warning">
        </div>
        <div class="col-md-3">
            <h6>KONTAK KAMI</h6>
            <hr class="bg-warning">
            <div class="row">
              <div class="col-1 mr-2">
                <object data="{{url('img/loc.svg')}}" type="{{url('img/loc.svg')}}">
                  <img src="{{url('img/loc.svg')}}" />
                </object>
              </div>
              <div class="col-10">
                <p>Komplek Rukan Taman Meruya
                <br>Blok M-51, Meruya Utara, Kembangan, Jakarta Barat,
                <br>Daerah Khusus Ibukota Jakarta 11620</p>
              </div>
            </div>
            <div class="row">
              <div class="col-1 mr-2">
                <object data="{{url('img/email.svg')}}" type="{{url('img/email.svg')}}">
                  <img src="{{url('img/email.svg')}}"/>
                </object>
              </div>
              <div class="col-10">
                <p>amptron@cbn.net.id</p>
              </div>
            </div>
            <div class="row">
              <div class="col-1 mr-2">
                <object data="{{url('img/phone.svg')}}" type="{{url('img/phone.svg')}}">
                  <img src="{{url('img/phone.svg')}}"/>
                </object>
              </div>
              <div class="col-10">
                <p>(+62-21) 585 5055
                <br>(+62-21) 586 0826
                <br>(+62-21) 586 0828</p>
              </div>
            </div>
        </div>
    </div>
    <div class="row mr-auto text-center">
        <div class="col mr-auto text-light bg-grey font-italic">
            <blockquote class="blockquote mb-0 card-body">
                <footer class="blockquote-footer">
                  <small class="text-muted">
                    <cite title="Amptron Instrumindo">Fast Response for Excellent Support</cite>
                    &copy; Amptron Instrumindo 1997 - 2020
                  </small>
                </footer>
            </blockquote>
        </div>
    </div>


    {{-- <div class="card text-dark bg-light">
      <div class="card-header">
        <a href="">aii.com</a> Global Website
      </div>
      <div class="card-body text-right">
        <blockquote class="blockquote mb-0">
          <footer class="blockquote-footer">PT. Amptron Instrumindo |<cite title="Source Title"> © Amptron Instrumindo 1997-2020</cite></footer>
        </blockquote>
      </div>
    </div> --}}
    {{-- end footer --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
