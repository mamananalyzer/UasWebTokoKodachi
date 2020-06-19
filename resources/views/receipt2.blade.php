<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>Invoice</title>

    <!-- Bootstrap core CSS -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}

    <style>
        .text-right {
            text-align: right;
        }
    </style>

</head>
<style>

@font-face {
    font-family: 'Lora';
    font-weight: normal;
    font-style: normal;
    font-variant: normal;
    src: url("https://fonts.googleapis.com/css2?family=Lora&display=swap");
    }
body {
    font-family: 'Lucida Sans';
    }
footer {
    position: fixed;
    bottom: -60px;
    left: 0px;
    right: 0px;
    height: 50px;

    /** Extra personal styles **/
    /* background-color: #03a9f4; */
    color: black;
    text-align: center;
    line-height: 35px;
}
.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    /* background: #eee; */
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    @page { margin: 0; }
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
    .foot {
        display: none;
    }
}
</style>
<body>
    <div id="invoice">
        <div class="invoice overflow-auto">
            <div style="min-width: 600px">
                <div>
                    <table>
                        <tr class="row">
                            <td class="col">
                                <a target="_blank" href="http://kodachi.com/">
                                    <img src="img/kodachi.png" width="300px" data-holder-rendered="true" />
                                    </a>
                            </td>
                            <td class="col company-details">
                                <h2 class="name">
                                    <a target="_blank" href="http://kodachi.com/">
                                    Kodachi Store
                                    </a>
                                </h2>
                                <div><p>Jl. Teluk gong
                                    <br>Gang. Masda 1 Pejagalan, penjaringan jakarta utara.
                                    <br>Daerah Khusus Ibukota Jakarta 11620</p></div>
                                <div>(+62-21) 888 7778, kodachistore@gmail.com</div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div>
                    <table>
                        <tr class="row contacts">
                            <td class="col invoice-to">
                                <div class="text-gray-light">INQUIRY FROM:</div>
                                <h2 class="to">{{ auth()->user()->name }}</h2>
                                <div class="address">{{$receipt->Address1}}</div>
                                <div class="address">{{$receipt->city}} {{$receipt->postcode}}</div>
                                <div class="email">{{$receipt->email}}, {{$receipt->company}}</div>
                                <div class="email">{{$receipt->phone}}</div>
                            </td>
                            <td class="col invoice-details">
                                {{date_default_timezone_set('Asia/Jakarta')}}
                                <div class="date">{{$receipt->date}}</div>
                                <div class="date">{{$receipt->time}}</div>
                                {{-- <button id="printInvoice" value="Print" onclick="window.print()" class="btn btn-info"><i class="fa fa-print"></i> Print</button> --}}
                            </td>
                        </tr>
                    </table>
                    <table style="background: #eee;" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td>#</td>
                                <td class="text-left">DESCRIPTION</td>
                                <td class="text-right"></td>
                                <td class="text-right">Quantity</td>
                                <td class="text-right">Price</td>
                            </tr>
                        </tbody>
                        {{-- <div class="sr-only">
                            {{$total=$receipt->quantity*$receipt->price}}
                            {{$pajak=$receipt->quantity*$receipt->price*10/100}}
                            {{$subtotal=$total+$pajak}}
                        </div> --}}
                        <tbody>
                            <tr>
                                <td class="no">01</td>
                                <td class="text-left"><h3>{{$receipt->product}}</h3>
                                   {{$receipt->description}}
                                </td>
                                <td class="unit"></td>
                                <td class="qty">{{$receipt->quantity}}</td>
                                <td class="total">Rp.{{ $fixprice = number_format($receipt->price, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Sub Total</td>
                                <td class="unit"></td>
                                <td class="qty"></td>
                                <td class="total">Rp.{{ $fixtotal = number_format($total=$receipt->quantity*$receipt->price, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>PPn (10%)</td>
                                <td class="unit"></td>
                                <td class="qty"></td>
                                <td class="total">Rp.{{ $fixpajak = number_format($pajak=$receipt->quantity*$receipt->price*10/100, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Total</td>
                                <td class="unit"></td>
                                <td class="qty"></td>
                                <td class="total">Rp.{{ $fixsubtotal = number_format($subtotal=$total+$pajak, 0, ',', '.') }}</td>
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
                    <div class="address">{{$receipt->pesan}}</div>

                    <div class="thanks mt-4">Thank you!</div>
                    <div class="notices">
                        <div>NOTICE:</div>
                        {{-- <div class="notice">Save this page with click button PRINT on top
                            and resend email to <a href="mailto:amptron@cbn.net.id">amptron@cbn.net.id .</a>
                        </div> --}}
                        <br>
                        <div class="notice">Please Transfer to Our Account</div>
                        <div class="notice">Mandiri, Cab. Puri Kencana</div>
                        <div class="notice">Kodachi Store</div>
                        <div class="notice">ACC. No : 118.0053121.959 (IDR)</div>
                        <div class="notice">Payment Full Amount</div>
                    </div>
                </div>
                <footer>
                    Fast Response for Excellent Support © Kodachi Store - 2020
                </footer>
            </div>
            <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
            <div></div>
        </div>
    </div>
</body>

