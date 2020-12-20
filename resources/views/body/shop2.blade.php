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
</div>
</nav>
</div>
<!--akhir navbar-->
<br>
<div class="container">
<div class="card-deck">
<div class="card">
    <img src="image/c9.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Bvlgari Man In Black</p><br>
      <p class="card-text">IDR540.000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
  <div class="card">
    <img src="image/p10.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Chanel No 5</p><br>
      <p class="card-text">IDR548.000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
  <div class="card">
    <img src="image/c26.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Chanel Bleu for Men</p><br>
      <p class="card-text">IDR598.000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
  <div class="card">
    <img src="image/p11.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Louis Vuitton Rose Des Vents</p>
      <p class="card-text">IDR558.000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
  <div class="card">
    <img src="image/p12.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" > Victoria’s Secret Bombshell</p>
      <p class="card-text">IDR568.000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
</div>
</div>

<!-- Pergantian Card-->
<br/>
<div class="container">
<div class="card-deck">
  <div class="card" >
    <img src="image/p13.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title">MJ Daisy Eau So Sweet</p>
      <p class="card-text">IDR578,000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
  <div class="card">
    <img src="image/p14.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title">Gucci Bamboo</p><br>
      <p class="card-text">IDR548,000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
  <div class="card">
    <img src="image/c14.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title">Lalique Encre Noire</p>
      <p class="card-text">IDR478.000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
  <div class="card">
    <img src="image/c15.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title">Coach for Men</p>
      <p class="card-text"><del>IDR498.000</del> IDR448,200</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
  <div class="card">
    <img src="image/p21.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Elie Saab Le Parfum in White</p>
      <p class="card-text">IDR548,000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button">Detail Product</a>
    </div>
  </div>
</div>
</div>
</div>

<!-- Pergantian Card-->
<br/>
<div class="container">
<div class="card-deck">
  <div class="card" >
    <img src="image/c11.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title">212 Sexy Men</p><br>
      <p class="card-text"><del>IDR558,000</del> IDR502,200</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
  <div class="card">
    <img src="image/c12.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title">John Varvatos Men</p><br>
      <p class="card-text">IDR488.000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
  <div class="card">
    <img src="image/p16.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title">MJ Daisy Eau So Fresh</p>
      <br>
      <p class="card-text">IDR578,000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
  <div class="card">
    <img src="image/p17.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title">Sarah Jessica Parker Lovely</p>
      <p class="card-text">IDR488,000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
    </div>
    <div class="card">
    <img src="image/c13.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title">Mont Blanc Emblem</p><br>
      <p class="card-text">IDR538.000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
</div>
</div>

@endsection

@section('script')
<!-- Pagination -->
<br>
<nav aria-label="...">
  <ul class="pagination justify-content-center" >
    <li class="page-item" >
    <a class="page-link" href="/shop" >1</a></li>
    </li>
    <li class="page-item active" aria-current="page"><a class="page-link" href="/shop2" style="background:grey;">2</a></li>

  </ul>
</nav>
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
<!-- CSS --> 
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
.card-deck{
  width: 75rem;
  padding-right: 30px;
}
.card-title{
  text-align:center;
  font-family:Segoe UI;
  font-weight: 500;
  font-size:12pt;
}

.card-text{
  text-align:center;
  font-size:11pt;
}
</style>
@endsection