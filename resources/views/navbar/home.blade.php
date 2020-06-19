@extends('layout/base')

@section('title', 'Kodachi Store')

@section('container')

    <link rel="stylesheet" href="{{asset('css/styleyt.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/test.css')}}"> --}}


    <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{asset('img/carousel/1.jpg')}}" class="d-block w-100 base" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    {{-- <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> --}}
                    <img src="img/kodachi.png" class="rounded-circle">
                    <h1 class="display-3 blue">Kodachi Store</h1>
                    {{-- <p class="lead">Sole Agent Electrical Intrument for Indonesian Territory</p> --}}
                </div>
                </div>
                <div class="carousel-item">
                <img src="{{asset('img/carousel/2.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-left">
                    {{-- <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}
                    <img src="img/kodachi.png" class="rounded-circle">
                    <h1 class="display-3 blue">Kodachi Store</h1>
                    {{-- <p class="lead">Sole Agent Electrical Intrument for Indonesian Territory</p> --}}
                </div>
                </div>
                <div class="carousel-item">
                <img src="{{asset('img/carousel/3.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-right">
                    {{-- <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> --}}
                    <img src="img/kodachi.png" class="rounded-circle">
                    <h1 class="display-3 blue">Kodachi Store</h1>
                    {{-- <p class="lead">Sole Agent Electrical Intrument for Indonesian Territory</p> --}}
                </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <script type="text/javascript">
        let section = document.querySelector('section');
        window.addEventListener('scroll', function(){
            let value = 1 + window.scrollY/-550;
            section.style.opacity = value;
        })
    </script>

@endsection
