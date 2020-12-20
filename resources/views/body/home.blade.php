@extends('body.master')
@section('title','Beranda')
@section('head')

@endsection

@section('content')
<!--navbar-->
<div class="topnav">

<nav class="navbar navbar-expand-lg navbar-light ">
<div class="container">
  <a class="navbar-brand" href="/home">Bom Parfum</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item{{ request()->is('ladies') ? ' active' : '' }}">
        <a class="nav-link" href="/ladies">Ladies</a>
      </li>
      <li class="nav-item{{ request()->is('men') ? ' active' : '' }}">
        <a class="nav-link" href="/men">Men</a>
      </li>
      <li class="nav-item dropdown{{ request()->is('sale') ? ' active' : '' }}">
        <a class="nav-link dropdown-toggle" href="/sale" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sale
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/saleLadies">Ladies</a>
          <a class="dropdown-item" href="/saleMen">Men</a>
      </li>
  </div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item{{ request()->is('ladies') ? ' active' : '' }}">
        <!-- Button trigger modal -->
        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" style="color:#553838;">
          <strong>Login</strong>
        </button>

        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Are you Bomb Parfume's Admin?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">no</button>
            <a class="btn btn-primary" href="/form" role="button">yes</a>
          </div>
        </div>
      </div>
    </div>
          </li>
    </div>
</div>
</nav>
</div>
<!--navbar-->
    <!-- Carousel -->
    <div class="container mt-4">
        <div id="Home Page" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="image/gambar3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" >
                <h1 style="font-family:NSimSun;">Elegant Parfume</h1>
                <p>Scent is your own story,You choose how it is told</p>
                <a class="btn btn-outline-light" href="/shop" role="button" style="font-family:Microsoft PhagsPa; font-weight:bold">
                Shop Now
                </a>
            </div>
            </div>
        </div>
        </div>
        </div>
<!--akhir carousel-->
 <!-- CSS -->       
<style type="text/css">
.carousel-item{
        height:700px;
        
    }
</style>

@endsection

@section('script')
<br>
<!--carousel-->
<div class="container">
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" >
        <img src="image/g1.png" alt="..." class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="image/g2.png" alt="..." class="d-block w-100"> 
    </div>
    <div class="carousel-item" >
      <img src="image/g3.png" alt="..." class="d-block w-100">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next" >
    <span class="carousel-control-next-icon" aria-hidden="true" ></span>
    <span class="sr-only" >Next</span>
  </a>
</div>
</div>
<!--akhir carousel-->
<!--footer-->
<div class="card text-center" >
<div class="card-footer text-muted">
    <!-- dropdown-->
    <select class="" id="inlineFormCustomSelectPref" style="background:#F7F7F7;color:grey;">
    <option selected>Language</option>
    <option value="1">English</option>
    <option value="2">German</option>
    <option value="3">Indonesia</option>
  </select>
    <!-- dropdown-->
    @BombParfume2020
  </div>
</div>
@endsection
<style type="text/css">
  .navbar-brand{
        font-family:Bodoni MT Black;
        font-size:17pt;
    }
  .navbar-collapse {
    text-align: center;
}
.navbar{
  background:#DEB887;
}
</style>