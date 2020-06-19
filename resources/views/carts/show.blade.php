@extends('layout/base')

@section('title', 'Receipt Page')

@section('container')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<div id="invoice">
    <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" value="Print" onclick="window.print()" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
            {{-- <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button> --}}
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="http://kodachi.com/">
                            <img src="{{asset('img/kodachi.png')}}" width="130px" data-holder-rendered="true" />
                            </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank" href="http://kodachi.com/">
                            Kodachi Store
                            </a>
                        </h2>
                        <div><p>Jl. Teluk gong
                            <br>Gang. Masda 1 Pejagalan, penjaringan jakarta utara.
                            <br>Daerah Khusus Ibukota Jakarta 11620</p></div>
                        <div>(+62-21) 888 7778</div>
                        <div>kodachistore@gmail.com</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INQUIRY FROM:</div>
                        <h2 class="to">{{$carts->name}} {{$carts->name2}}</h2>
                        <div class="address">{{$carts->Address1}}</div>
                        <div class="address">{{$carts->city}} {{$carts->postcode}}</div>
                        <div class="email">{{$carts->email}}, {{$carts->company}}</div>
                        <div class="email">{{$carts->phone}}</div>
                    </div>
                    <div class="col invoice-details">
                        {{date_default_timezone_set('Asia/Jakarta')}}
                        <div class="date">{{$carts->date}}</div>
                        <div class="date">{{$carts->time}}</div>
                        {{-- <button id="printInvoice" value="Print" onclick="window.print()" class="btn btn-info"><i class="fa fa-print"></i> Print</button> --}}
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-left">DESCRIPTION</th>
                            <th class="text-right"></th>
                            <th class="text-right">Quantity</th>
                            <th class="text-right">Price</th>
                        </tr>
                    </thead>
                    <div class="sr-only">
                        {{$total=$carts->quantity*$carts->price}}
                        {{$pajak=$carts->quantity*$carts->price*10/100}}
                        {{$subtotal=$total+$pajak}}
                    </div>
                    <tbody>
                        <tr>
                            <td class="no">01</td>
                            <td class="text-left"><h3>{{$carts->product}}</h3>
                               {{$carts->description}}
                            </td>
                            <td class="unit"></td>
                            <td class="qty">{{$carts->quantity}}</td>
                            <td class="total">Rp.{{ $fixprice = number_format($carts->price, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td class="unit"></td>
                            <td class="qty"></td>
                            <td class="total">Rp.{{ $fixtotal = number_format($total, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Pajak (10%)</td>
                            <td class="unit"></td>
                            <td class="qty"></td>
                            <td class="total">Rp.{{ $fixpajak = number_format($pajak, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Sub Total</td>
                            <td class="unit"></td>
                            <td class="qty"></td>
                            <td class="total">Rp.{{ $fixsubtotal = number_format($subtotal, 0, ',', '.') }}</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2"></td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
                <div class="address">{{$carts->pesan}}</div>

                <div class="thanks mt-4">Thank you!</div>
                <div class="notices row">
                    <div class="col">
                        <div>NOTICE:</div>
                        <div class="notice">
                            {{-- and resend email to <a href="mailto:amptron@cbn.net.id">amptron@cbn.net.id .</a> --}}
                        </div>
                        <br>
                        <div class="notice">Please Transfer to Our Account</div>
                        <div class="notice">Mandiri, Cab. Puri Kencana</div>
                        <div class="notice">Kodachi Store</div>
                        <div class="notice">ACC. No : 118.0053121.959 (IDR)</div>
                        <div class="notice">Payment Full Amount</div>
                    </div>
                    <div class="col">
                        <br>
                            <img src="{{asset('/images/buktibayar/'.$carts->picture)}}" width="650px"/>
                        <br>
                        <div class="text-center my-2">
                            @if( $carts->status =='waiting')
                                <h3 class="btn-lg btn-warning text-center font-weight-bold">PEMBAYARAN BELUM TERVERIFIKASI</h3>
                            @elseif( $carts->status =='uploaded')
                                <button type="submit" class="btn-lg btn-primary"><i class="fa fa-approve"></i>Bukti Pembayaran Telah Berhasil di Upload</button>
                            @elseif( $carts->status =='confirm')
                                <button type="submit" class="btn-lg btn-success"><i class="fa fa-approve"></i>Pembayaran Sudah Terkonfirmasi</button>
                            @else
                                <button class="btn-lg btn-danger">Mencurigakan</button>
                            @endif
                        </div>
                    </div>
                </div>
            </main>
            <footer>
                Fast Response for Excellent Support © Kodachi Store - 2020
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>
@endsection


