@extends('Master.app')

@section('title','menu')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
  <link href="css/flexslider.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">
</head>
<body>
    
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Menu Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                <h1 class="mb-5">Ekanteen Collections</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        {{-- <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1"> --}}
                            {{-- <i class="fa fa-coffee fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Popular</small>
                                <h6 class="mt-n1 mb-0">Food</h6>
                            </div> --}}
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fa fa-hamburger fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Special</small>
                                <h6 class="mt-n1 mb-0">Launch</h6>
                            </div>
                        </a>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Lovely</small>
                                <h6 class="mt-n1 mb-0">Dinner</h6>
                            </div>
                        </a>
                    </li> --}}
                </ul>
                <div class="row" style="display:flex;gap:10vw">
                    <div class="card" style="width: 18rem;">
                        <img src="img/sariroti.png" style="width: 66%;margin-left:15%" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Sari Roti</h5>
                          <p class="card-text">Rp 11.000</p>
                          <a href="#" class="btn btn-primary">Buy</a>
                          <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                      </div>

                    <div class="card" style="width: 18rem;">
                        <img src="img/Teh-pucuk-harum.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Teh Pucuk</h5>
                          <p class="card-text">Rp 4000</p>
                          <a href="#" class="btn btn-primary">Buy</a>
                          <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                      </div>

                      <div class="card" style="width: 18rem;">
                        <img src="img/nasigoreng.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Nasi Goreng</h5>
                          <p class="card-text">Rp 5000</p>
                          <a href="#" class="btn btn-primary">Buy</a>
                          <a href="#" class="btn btn-primary">Detail</a>
                        </div>  
                      </div>

                      <div class="card" style="width: 18rem;">
                        <img src="img/nasigoreng.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Nasi Goreng</h5>
                          <p class="card-text">Rp 5000</p>
                          <a href="#" class="btn btn-primary">Buy</a>
                          <a href="#" class="btn btn-primary">Detail</a>
                        </div>  
                      </div>

                      <div class="card" style="width: 18rem;">
                        <img src="img/nasigoreng.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Nasi Goreng</h5>
                          <p class="card-text">Rp 5000</p>
                          <a href="#" class="btn btn-primary">Buy</a>
                          <a href="#" class="btn btn-primary">Detail</a>
                        </div>  
                      </div>

                      <div class="card" style="width: 18rem;">
                        <img src="img/nasigoreng.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Nasi Goreng</h5>
                          <p class="card-text">Rp 5000</p>
                          <a href="#" class="btn btn-primary">Buy</a>
                          <a href="#" class="btn btn-primary">Detail</a>
                        </div>  
                      </div>

                      <div class="card" style="width: 18rem;">
                        <img src="img/nasigoreng.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Nasi Goreng</h5>
                          <p class="card-text">Rp 5000</p>
                          <a href="#" class="btn btn-primary">Buy</a>
                          <a href="#" class="btn btn-primary">Detail</a>
                        </div>  
                      </div>

                      <div class="card" style="width: 18rem;">
                        <img src="img/nasigoreng.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Nasi Goreng</h5>
                          <p class="card-text">Rp 5000</p>
                          <a href="#" class="btn btn-primary">Buy</a>
                          <a href="#" class="btn btn-primary">Detail</a>
                        </div>  
                      </div>

                      <div class="card" style="width: 18rem;">
                        <img src="img/nasigoreng.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Nasi Goreng</h5>
                          <p class="card-text">Rp 5000</p>
                          <a href="#" class="btn btn-primary">Buy</a>
                          <a href="#" class="btn btn-primary">Detail</a>
                        </div>  
                      </div>

                      <div class="card" style="width: 18rem;">
                        <img src="img/nasigoreng.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Nasi Goreng</h5>
                          <p class="card-text">Rp 5000</p>
                          <a href="#" class="btn btn-primary">Buy</a>
                          <a href="#" class="btn btn-primary">Detail</a>
                        </div>  
                      </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

</body>
</html>