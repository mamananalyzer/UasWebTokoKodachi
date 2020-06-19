@extends('layout/base')

@section('title', 'About')

@section('container')

    {{-- sub-nav --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand page-scroll" href="#home">
            <img class="ml-5" src="img/kodachi.png" width="50px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto offset-md-3">
            <li class="nav-item pr-5">
            <a class="nav-link page-scroll" href="#home"><h3>Home</h3></a>
            </li>
            <li class="nav-item pr-5">
            <a class="nav-link page-scroll" href="#about"><h3>About Us</h3></a>
            </li>
            <li class="nav-item pr-5">
            {{-- <a class="nav-link page-scroll" href="#partner"><h3>Customer</h3></a> --}}
            </li>
        </ul>
        <span class="navbar-text">

        </span>
        </div>
    </nav>
    {{-- end sub-nav --}}


    <div class="jumbotron jumbotron-fluid" id="home">
      <div class="container text-left">
        <img src="img/kodachi.png" class="rounded-circle offset-md-2">
        <h1 class="display-3 blue">Kodachi Store</h1>
        {{-- <p class="lead offset-md-1 pl-2">Sole Agent Electrical Intrument for Indonesian Territory</p> --}}
      </div>
    </div>

      <div class="row pt-4 offset-md-1 container" id="about">
        <div class="col-md-5 text-center">
          <div class="border-info pKiri">
            <img src="img/kodachi.png" width="100%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kodachi Store</h5>
              <hr>
              {{-- <p class="card-text grey">
                In 1997, PT. Kodachi Store was established as a specialist Metering and Electrical
                Instrumentation company. We are belong to the Amptron Group which is already extablished since
                1982 with offices in Singapore, Malaysia, Thailand, and Indonesia, operate Internationally to serve
                our customers locally.
              </p> --}}
            </div>
          </div>
        </div>


        <div class="accordion col-md-6 pKanan" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-outline-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <div class="gold">
                        <h6><i class="fas fa-chevron-circle-up fa-rotate-180" style="color:blue;"></i> TENTANG KAMI</h6>
                    </div>
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body grey">
                    PT. Kodachi Store adalah toko yang menjual sepatu classic yang sekarang menjadi modern.
                    Kalau kita liat sepatu Kodachi mungkin beberapa dari kita akan teringat dengan anak-anak sekolah
                    di Jepang yang menggunakan sepatu mirip sekali dengan sepatu keluaran Kodachi.
                    Yaitu sepatu “Uwabaki”, atau dikenal sebagai Indoor shoes. Sepatu yang mereka gunakan di dalam ruangan,
                    dimana sepatu ini khusus hanya digunakan di dalam tempat-tempat yang dilarang menggunakan sepatu luar ruangan.
                </div>
              </div>
            </div>
            {{-- <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-outline-light" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="gold">
                        <h6><i class="fas fa-chevron-circle-up fa-rotate-180" style="color:blue;"></i> VISI DAN MISI</h6>
                    </div>
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body grey">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div> --}}
          </div>
      </div>

      {{-- <div class="container">
        <p>
          As a group, we have built a solid foundation of knowledge, experience and reference of providing
          advanced instrumentation, automation and control solution to wide spectrum od industries in
          South East Asia region.
        </p>
        <p>
          Our business operation and activities divided into three Strategic Business Units :
        </p>
        <div class="row">
          <div class="col">
            <ul>
              <h5>Instrumentation & Metering</h5>
              <li>Sales & marketing of analog & digital meters</li>
              <li>process transducers & transmitter</li>
              <li>energy & power metering system</li>
              <li>intelligent multifunction meters</li>
              <li>protection & monitoring relays</li>
              <li>control timers</li>
              <li>portable test instruments</li>
              <li>line and digital recorders</li>
              <li>alarm annunciators</li>
            </ul>
            <p>with technical support, test and calibration, product customization, repairs and warranty services</p>
          </div>
          <div class="col">
            <ul>
              <h5>Control Room Technology</h5>
              <li>Sales & marketing of analog & digital meters</li>
              <li>process transducers & transmitter</li>
              <li>energy & power metering system</li>
              <li>intelligent multifunction meters</li>
              <li>protection & monitoring relays</li>
              <li>control timers</li>
              <li>portable test instruments</li>
              <li>line and digital recorders</li>
              <li>alarm annunciators</li>
            </ul>
          </div>
        </div>


          Design and Build mission Critical Control Room and operation command center
          a total Control Room Technology solution encompasses large screen video display, mosaic/mimic
          display, alarm monitoring panel, time & clock system, ergonomic complaints, audio
          and video controls, security access, Electrical, Fire, Lighting, and other services infrastructure.

          Control System
          Design, Develop and Install Ethernet / fieldbus / wireless control application and solution
          synchronized time and clock system (GPS. NTP, DCF, MSF or HBG), floodlight control / facilities monitoring /
          electrical power control systems.

          To backup our sales team, we are also available for demo units, technical assistance and advice to help
          our customers in purchasing the right material for their application and give latest informations for
          some new development products

          To aim is to continue to anchor on our timeless core values to serve our specific customers, in each market
          with same quantity, standards and service level expected by our customes and make us as a perfect partnet.
      </div> --}}

      <br>

    <div class="section container">
        <div class="row">
            <div class="col text-center">
              <h2> </h2>
              <hr>
            </div>
        </div>
        <div class="portfolio" id="partner">
          {{-- <div class="row" id="">
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/pln.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/siemens.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/abb.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/schneider.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/tamco.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/techsea.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
          </div> --}}
          {{-- <div class="row">
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/mitraida.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/gspe.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/altrak.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/exabb.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/gae.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
              <div class="col-sm-2 text-center thumbnail">
                  <div class="card border-light">
                      <img src="img/partner/ge.png" width="100%" height="100%" class="card-img-top" alt="...">
                      <hr>
                  </div>
              </div>
          </div> --}}
          {{-- <div class="row">
            <div class="col-sm-4 text-center thumbnail">
                <div class="card border-light">
                    <img src="img/partner/ume.png" width="100%" height="100%" class="card-img-top" alt="...">
                    <hr>
                </div>
            </div>
            <div class="col-sm-4 text-center thumbnail">
                <div class="card border-light">
                    <img src="img/partner/indokordsa.png" width="100%" height="100%" class="card-img-top" alt="...">
                    <hr>
                </div>
            </div>
          </div> --}}
        </div>
    </div>
@endsection
