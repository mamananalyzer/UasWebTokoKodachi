@extends('layout/base')

@section('title', "$display->brand")

@section('container')

<link rel="stylesheet" href="{{asset('css/styleyt.css')}}">

    <div class="popup">
        <div class="row pt-4 container">
            <div class="col-md-3 offset-md-1">
                <div class="card" data-text="{{$display->type}}">
                    <div class="imgBx">
                        <img src="{{$display->getPic()}}" width="100%" height="100%" alt="">
                    </div>
                    <div class="contentBx neon">
                        <h3>{{$display->type}}</h3>
                    </div>
                </div>
                <div class="row card-body grey">
                    <div class="col-7">
                        <a href=" {{ url('/product') }} " class="btn btn-primary mt-2 mr-auto">Back to Product list</a>
                    </div>
                    {{-- <div class="col">
                        <a href=" {{ url('/cart') }} " class="btn btn-primary mt-2 mr-auto offset-md-5">Cart</a>
                    </div> --}}
                </div>
            </div>

                <div class="accordion offset-md-2 col-md-6" id="accordionExample">
                    <h1 class="mt-4">{{$display->brand}}</h1>
                    <hr>
                    <h2><span class="text-muted mt-2 mb-5">{{$display->type}}</span></h2>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning text-light mt-4" data-toggle="modal" data-target="#exampleModalScrollable">
                            Order !
                        </button>


                        <h3 class="pt-2 pb-2">Rp. {{ $fixprice = number_format($display->price, 0, ',', '.') }},-</h3>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalScrollableTitle">Order !</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action=" {{ url('email/send') }}" method="POST" onsubmit="if(document.getElementById('agree').checked) { return true; }
                                        else {
                                            alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy');
                                            return false;
                                        }">
                                        {{ csrf_field() }}
                                            {{-- <label for="exampleInputName">Name *</label>
                                            <div class="form-row">
                                                <div class="col">
                                                <input type="text" class="form-control" placeholder="First name" name="name" required>
                                                </div>
                                                <div class="col">
                                                <input type="text" class="form-control" placeholder="Last name" name="name2" required>
                                                </div>
                                            </div> --}}
                                        <div class="form-group sr-only">
                                            <label for="exampleInputEmail1">Email *</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ auth()->user()->email }}" aria-describedby="emailHelp" required>
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="row sr-only">
                                            <div class="col-6 form-group">
                                                <label for="Company">Company *</label>
                                                <input type="company" name="company" class="form-control" id="Company" value="{{ auth()->user()->company }}" placeholder="PT. Amptron Instrumindo" required>
                                            </div>
                                            <div class="col-6 form-group">
                                                <label for="PhoneNumber">Phone *</label>
                                                <input type="tel" name="phone" class="form-control" id="PhoneNumber" value="{{ auth()->user()->phone }}" placeholder="+62 000" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 form-group">
                                                <label for="Street and Number">Street and Number *</label>
                                                <input type="Street and Number" name="Address1" class="form-control" id="Street and Number" placeholder="Address" required>
                                            </div>
                                            <div class="col-3 form-group">
                                                <label for="City">City *</label>
                                                <input type="city" name="city" class="form-control" id="City" placeholder="City" required>
                                            </div>
                                            <div class="col-3 form-group">
                                                <label for="Post Code">Post Code *</label>
                                                <input type="postcode" name="postcode" class="form-control" id="Post Code" placeholder="Post Code" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="product">Product *</label>
                                            <input type="product" name="product" class="form-control" id="product" aria-describedby="emailHelp" value="{{ $display->type }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description *</label>
                                            <input type="description" name="description" class="form-control" id="description" aria-describedby="emailHelp" value="{{ $display->description }}" required>
                                        </div>
                                        <div class="form-group sr-only">
                                            <label for="name">Name *</label>
                                            <input type="name" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="{{ auth()->user()->name }}" required>
                                        </div>
                                        <div class="form-group sr-only">
                                            <label for="userid">User ID *</label>
                                            <input type="userid" name="userid" class="form-control" id="userid" aria-describedby="emailHelp" value="{{ auth()->user()->id }}" required>
                                        </div>
                                        <div class="form-group sr-only">
                                            <label for="price">Price *</label>
                                            <input type="price" name="price" class="form-control" id="price" aria-describedby="emailHelp" value="{{ $display->price }}" required>
                                        </div>
                                        <div class="form-group sr-only">
                                            <label for="status">Status *</label>
                                            <input type="status" name="status" class="form-control" id="status" aria-describedby="emailHelp" value="waiting" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="quantity">Quantity *</label>
                                            <input type="number" name="quantity" class="form-control" id="quantity" aria-describedby="emailHelp" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Your Message *</label>
                                            <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="4" required></textarea>
                                        </div>
                                        <input type="checkbox" name="checkbox" value="check" id="agree" />
                                        <label for="agree">I have read and agree to the Terms and Conditions and Privacy Policy</label>
                                        <br>
                                        <br>
                                        <input type="hidden" name="" value="{{date_default_timezone_set('Asia/Jakarta')}}">
                                        <input type="hidden" name="date" value="{{'Date : ' . date('d-m-Y')}}">
                                        <input type="hidden" name="time" value="{{'Time : ' . date('H:i:s')}}">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input class="btn btn-success" type="submit" name="submit" value="Order !" />
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                        <p class="mt-2">{{$display->description}}</p>
                        <?php
                            $listdescription_explode=explode(",", $display->listdescription);
                            // dd($listdescription_explode);
                            echo "
                            <ul>";
                                foreach($listdescription_explode as $list) {
                                    echo "<li>";
                                    echo ucwords($list)."</li>";
                                }
                            echo "</ul>";
                        ?>

                        {{-- <div class="card-body grey">
                            <div class="row">
                                <div class="col-1">
                                    <object data="{{asset('img/download.svg')}}" type="{{asset('img/download.svg')}}">
                                        <img src="{{asset('img/download.svg')}}"/>
                                    </object>
                                </div>
                                <div class="col-4">
                                    <h6>Downloads :</h6>
                                </div>
                            </div>
                            <a href="{{$display->datasheet}}"><button type="button" class="btn btn-primary">Datasheet</button></a>
                            <a href="{{$display->usermanual}}"><button type="button" class="btn btn-primary">User Manual</button></a>
                            <a href="{{$display->modbus}}"><button type="button" class="btn btn-primary">Modbus Map</button></a>
                            <a href="{{$display->software}}"><button type="button" class="btn btn-primary">Software</button></a>
                        </div> --}}
                </div>
        </div>
    </div>
      <br>
@endsection
