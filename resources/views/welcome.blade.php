@extends('layout.app')

@section('content')
    <!-- START CAROUSEL -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="http://opusnusantara.com/images/Slider1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="http://opusnusantara.com/images/Slider2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="http://opusnusantara.com/images/Slider1.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!--END CAROUSEL-->
    <!--START JUMBOTRON-->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Fluid jumbotron</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      </div>
    </div>
    <!--END JUMBOTRON-->
    <!--START CARD-->
    <div class="container">
      <center>
        <div class="row">
          <?php
            $lombas=\App\Lomba::get();
          ?>
          @for($i=0;$i<sizeof($lombas);$i++)
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{$lombas[$i]->poster}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{$lombas[$i]->name}}</h5>
                <p class="card-text">{{$lombas[$i]->deskripsi}}</p>
                <p class="card-text">{{$lombas[$i]->tanggal_tutup}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          @endfor
        </div>

      </center>
    </div>
    <!--END CARD-->
@endsection