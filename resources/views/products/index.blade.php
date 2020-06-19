@extends('layout/base')

@section('title', 'Dashboard')

@section('container')

@if(session('status'))
<div class="alert alert-success container text-center" role="alert">
    {{session('status')}}
</div>
@endif

    <div class="container">
      <div class="row">
        <div class="col-9">
          <h1 class="mt-3">Dashboard</h1>

            <form method="GET" action="{{ url('/products') }}" class="form-inline">
                @if(auth()->user()->role == 'admin')
                <a href="{{url('/products/create')}}" class="btn btn-success my-2">Add Products</a>
                {{-- <a href="{{url('/brand')}}" class="btn btn-success my-2 ml-2">Brand</a> --}}
                <a href="{{url('/procategorie')}}" class="btn btn-success my-2 ml-2">Categories</a>
                @endif
                <a href="" class="ml-auto"><img src="{{ asset('assets/img/kodachi.png')}}" width="44px" alt=""><span>{{ auth()->user()->name }}</span></a>
                <a href="{{ ('/logout') }}" class="btn btn-warning ml-2 mr-auto">Logout</a>
                {{-- <input name="cari" type="search" class="form-control ml-4 ml-auto mr-2">
                <button class="btn btn-outline-primary" type="submit">Cari</button> --}}
            </form>
            @if(auth()->user()->role == 'admin')
            <a href="{{url('/admincarts')}}" class="btn btn-success my-2">Show Request Product</a>
            <a href="{{url('/product')}}" class="btn btn-success my-2">Product List</a>
            @endif
            @if(auth()->user()->role == 'user')
            <a href="{{url('/carts')}}" class="btn btn-success my-2">Show Request Product</a>
            <a href="{{url('/product')}}" class="btn btn-success my-2">Product List</a>
            @endif


            @if(auth()->user()->role == 'admin')
            <ul class="list-group mb-4">
                @foreach ($products as $product)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $product -> type }}
                <a href="products/{{ $product->id }}" class="badge badge-info">Read more ...</a>
                </li>
                @endforeach
            </ul>
            @endif
        </div>
      </div>
    </div>
@endsection
