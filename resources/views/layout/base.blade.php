<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <link rel="stylesheet" href="{{asset('css/test.css')}}">

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
        Kodachi Store
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form method="GET" action="{{ url('/product') }}" class="form-inline my-2 my-lg-0 offset-md-2 mr-2">
          <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav navbar-right offset-md ml-5">
          <a class="nav-item nav-link pr-4" href="{{ url('/') }}">Home</a>
          <a class="nav-item nav-link pr-4" href="{{ url('/about') }}">About</a>
          {{-- <a class="nav-item nav-link pr-4" href="{{ url('/principal') }}">Principal</a> --}}
          {{-- <a class="nav-item nav-link pr-4" href="{{ url('/contact') }}">Contact Us</a> --}}
          <a class="nav-item nav-link pr-4" href="{{ url('/product') }}">Product</a>
          <a class="nav-item nav-link pr-4" href="{{ url('/products') }}">Profile</a>
            {{-- <div class="dropdown">
              <a class="nav-item nav-link pr-4" href="#">Product</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{ url('/product') }}">List Product</a>
                  <a class="dropdown-item" href="{{ url('/login') }}">Admin</a>
                </div>
            </div> --}}
        </ul>
      </div>
    </nav>
    {{-- end header --}}


    @yield('container')


    {{-- footer --}}
    <div class="foot row mr-auto text-left text-light bg-grey pl-5 pr-5 pt-5">
        <div class="col-md-3">
            <h6>WORKING HOURS</h6>
            <hr class="bg-warning">
            <div class="row">
              <div class="col-1 mr-4">
                <object data="{{url('img/work.svg')}}" type="{{url('img/work.svg')}}">
                  <img src="{{url('img/work.svg')}}"/>
                </object>
              </div>
              <div class="col-10">
                <p>Monday - Friday : 08.15 - 17.15</p>
                <p>Saturday - Sunday : Closed</p>
              </div>
            </div>

        </div>
        <div class="col-md-3">
            <h6>LATEST NEWS</h6>
            <hr class="bg-warning">
        </div>
        <div class="col-md-3">
            <h6>SITEMAP</h6>
            <hr class="bg-warning">
        </div>
        <div class="col-md-3">
            <h6>CONTACT US</h6>
            <hr class="bg-warning">
            <div class="row">
              <div class="col-1 mr-2">
                <object data="{{url('img/loc.svg')}}" type="{{url('img/loc.svg')}}">
                  <img src="{{url('img/loc.svg')}}" />
                </object>
              </div>
              <div class="col-10">
                <p>Jl. Teluk gong
                <br>Gang. Masda 1 Pejagalan, penjaringan jakarta utara.
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
                <p>kodachistore@gmail.com</p>
              </div>
            </div>
            <div class="row">
              <div class="col-1 mr-2">
                <object data="{{url('img/phone.svg')}}" type="{{url('img/phone.svg')}}">
                  <img src="{{url('img/phone.svg')}}"/>
                </object>
              </div>
              <div class="col-10">
                <p>(+62-21) 888 7778
                <br>(+62-21) 557 0987</p>
              </div>
            </div>
        </div>
    </div>
    <div class="row mr-auto text-center">
        <div class="col mr-auto text-light bg-grey font-italic">
            <blockquote class="blockquote mb-0 card-body">
                <footer class="blockquote-footer">
                  <small class="text-muted">
                    <cite title="Kodachi Store">Fast Response for Excellent Support</cite>
                    &copy; Kodachi Store 1997 - 2020
                  </small>
                </footer>
            </blockquote>
        </div>
    </div>
    <div></div>


    {{-- <div class="card text-dark bg-light">
      <div class="card-header">
        <a href="">aii.com</a> Global Website
      </div>
      <div class="card-body text-right">
        <blockquote class="blockquote mb-0">
          <footer class="blockquote-footer">PT. Kodachi Store |<cite title="Source Title"> © Kodachi Store 1997-2020</cite></footer>
        </blockquote>
      </div>
    </div> --}}
    {{-- end footer --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
