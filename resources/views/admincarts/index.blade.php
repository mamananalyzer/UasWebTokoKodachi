@extends('layout/base')

@section('title', 'Kodachi Store')

@section('container')

@if(session('status'))
<div class="alert alert-success container text-center" role="alert">
    {{session('status')}}
</div>
@endif

    <div class="container">
      <div class="row">
        <div class="col-9">
          <h1 class="mt-3">Request Customer</h1>

            <form method="GET" action="{{ url('/carts') }}" class="form-inline">
                <a href="{{url('/products')}}" class="btn btn-light my-2">Back</a>
                <a href="" class="ml-auto"><img src="{{ asset('assets/img/user.png')}}" width="44px" alt=""><span>{{ auth()->user()->name }}</span></a>
                <a href="{{ ('/logout') }}" class="btn btn-warning ml-2 mr-auto">Logout</a>
            </form>




            <ul class="list-group">
                @foreach ($carts as $cart)
                {{-- @if(auth()->user()->id == $cart->userid) --}}
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $cart -> name }}, {{ $cart -> email }}, {{ $cart -> company }}
                    <a href="{{ url('/admincarts')}}/{{ $cart -> id }}" class="badge badge-info ml-auto mr-4"></i>Read more ...</a>
                    <form action="/carts/{{ $cart->id }}" method="post" class="d-inline">
                        @method('delete')
                        {{ csrf_field() }}
                        <button type="submit" onclick="return confirm('Are you sure delete this request ?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                    </form>
                    @if( $cart->status =='waiting')
                        <form action="/carts/{{ $cart->id }}" method="post" class="d-inline">
                            @method('patch')
                            {{ csrf_field() }}
                            <button type="submit" onclick="return confirm('Are you sure Approve this request ?')" class="btn btn-warning ml-2" value="confirm" name="status"><i class="fa fa-approve"></i>Approve</button>
                        </form>
                    @elseif( $cart->status =='uploaded')
                        <button type="submit" class="btn btn-primary ml-2"><i class="fa fa-approve"></i>Uploaded</button>
                    @elseif( $cart->status =='confirm')
                        <button type="submit" class="btn btn-success ml-2"><i class="fa fa-approve"></i>Confirmed</button>
                    @else
                        <button class="btn btn-danger ml-2">Mencurigakan</button>
                    @endif
                </li>
                {{-- @endif --}}
                @endforeach
            </ul>
            <a href="{{url('/products')}}" class="btn btn-light my-2">Back</a>
        </div>
      </div>
    </div>
@endsection
