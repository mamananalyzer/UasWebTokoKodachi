<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body>
    <div class="row fixed-top no-gutters font-weight-bold ">
        <div class="col ">
	      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    		      <a class="navbar-brand" href="#">
                <img src="img/aii.png" width="35" height="35" class="d-inline-block align-top rounded-circle" alt="">
              </a>
    		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		    <span class="navbar-toggler-icon"></span>
    		  </button>
    		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    		    <ul class="navbar-nav mr-auto">
    		      <li class="nav-item">
    		        <a class="nav-link" href="/">BERANDA</a>
    		      </li>
    		      <li class="nav-item">
    		        <a class="nav-link" href="/about">TENTANG KAMI</a>
    		      </li>
    		      <li class="nav-item dropdown">
    		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		          PRODUK
    		        </a>
    		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    		          <a class="dropdown-item" href="#">Power Meter</a>
    		          <a class="dropdown-item" href="#">Analog Meter</a>
                  <a class="dropdown-item" href="#">Digital Meter</a>
    		          <div class="dropdown-divider"></div>
    		          <a class="dropdown-item" href="#">Something else here</a>
    		        </div>
    		      </li>
    		      <li class="nav-item">
    		        <a class="nav-link" href="kontak.php" tabindex="-1" aria-disabled="true">KONTAK</a>
    		      </li>
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">BERITA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">SERVIS</a>
              </li>
    		    </ul>
    		    <form class="form-inline my-2 my-lg-0">
    		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    		      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    		    </form>
    		  </div>
		    </nav>
	    </div>
    </div>

    @yield('container')
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>