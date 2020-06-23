@extends('layout/base')

@section('title', "$product->brand")

@section('container')

      <div class="row pt-4 offset-md-1 container" id="home">
        <div class="col-md-5 text-center">
          <div class="border-info">
            <img src="{{$product->getPic()}}" width="100%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <hr>
            </div>
          </div>
        </div>

        <div class="accordion col-md-6" id="accordionExample">
            <h1 class="mt-4">{{$product->brand}}</h1>
            <hr>
            <h2><span class="text-muted mt-2 mb-5">{{$product->type}}</span></h2>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning text-light mt-4" data-toggle="modal" data-target="#exampleModalScrollable">
                    Request a Quote!
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h3>{{ $product->price }}</h3>
                            <h5 class="modal-title" id="exampleModalScrollableTitle">Request a Quote!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>
            <p class="mt-2">{{$product->description}}</p>
            <?php
                $listdescription_explode=explode(",", $product->listdescription);
                // dd($listdescription_explode);
                echo "
                <ul>";
                    foreach($listdescription_explode as $list) {
                        echo "<li>";
                        echo ucwords($list)."</li>";
                    }
                echo "</ul>";
            ?>

            <div class="card-body grey">
                {{-- <div class="row">
                    <div class="col-1">
                        <object data="{{asset('img/download.svg')}}" type="{{asset('img/download.svg')}}">
                            <img src="{{asset('img/download.svg')}}"/>
                        </object>
                    </div>
                    <div class="col-4">
                        <h6>Downloads :</h6>
                    </div>
                </div>
                <a href="{{$product->datasheet}}"><button type="button" class="btn btn-primary">Datasheet</button></a>
                <a href="{{$product->usermanual}}"><button type="button" class="btn btn-primary">User Manual</button></a>
                <a href="{{$product->modbus}}"><button type="button" class="btn btn-primary">Modbus Map</button></a>
                <a href="{{$product->software}}"><button type="button" class="btn btn-primary">Software</button></a>
                <br> --}}
                <br>
                <a href="{{ $product->id }}/edit" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                <form action="{{url('/products')}}/{{ $product->id }}" method="post" class="d-inline">
                    @method('delete')
                    {{ csrf_field() }}
                    <button type="submit" onclick="return confirm('Are you sure delete this product ?')" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                </form>
                <a href="{{url('/products')}}" class="card-link ml-2">Back</a>
            </div>
          </div>
        </div>
      <br>
@endsection
