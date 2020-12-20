@extends('body.master')
@section('title','Ladies Parfume')
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
  <div class="card" >
    <img src="image/p.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Estee Lauder Pleasures</p>
      <p class="card-text" >IDR489,000</p>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#p">
        Detail Product
      </button>
      <!-- Modal Gambar 1-->
      <div class="modal fade" id="p" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="p">Eau de Parfum 100ml (NON BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/p.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              It is a delightful sheer floral created from delicate lilies and peonies, elegant jasmine and exotic Karo-Karounde blossoms, 
              all tingling with the rare essence of exotic Baie Rose
              </div>
              <div class="text-muted" style="font-size:10pt;">
                3 days ago
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Order</button>
            </div>
          </div>
        </div>
      </div>
            <!--Akhir Modal-->
    </div>
  </div>

  <div class="card">
    <img src="image/p1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Chanel Coco Mademoiselle</p>
      <p class="card-text"><del>IDR548,000</del> IDR493,000</p>
     <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#p1">
        Detail Product
      </button>
      <!-- Modal Gambar 2-->
      <div class="modal fade" id="p1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="p1">Eau de Parfum 100ml (WITH BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/p1.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              Easily one of the most effortlessly likeable, inherently pretty, 
              wearable in any season for casual or formal, modern classic fragrances. Oh, and that bottle! Absolutely gorgeous.
              </div>
              <div class="text-muted" style="font-size:10pt;">
                3 days ago
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Order</button>
            </div>
          </div>
        </div>
      </div>
          <!--Akhir Modal-->
    </div>
  </div>

  <div class="card">
    <img src="image/p2.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Elie Saab Rose Couture</p>
      <p class="card-text">IDR568,000</p>
      <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#p2">
        Detail Product
      </button>
      <!-- Modal Gambar 3-->
      <div class="modal fade" id="p2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="p2">Eau de Toilette 90ml (NON BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/p2.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              The composition begins with a combination of orange blossom, silky rose petals and peony. The heart continues with accords of rose nectar, 
              fruity nuances, jasmine and vanilla. The base tops it all with a woody accord of patchouli and sandalwood
              </div>
              <div class="text-muted" style="font-size:10pt;">
                3 days ago
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Order</button>
            </div>
          </div>
        </div>
      </div>
          <!--Akhir Modal-->
    </div>
  </div>

  <div class="card">
    <img src="image/p3.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Marc Jacobs Daisy Dream</p>
      <p class="card-text">IDR548,000</p>
       <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#p3">
        Detail Product
      </button>
      <!-- Modal Gambar 4-->
      <div class="modal fade" id="p3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="p3">Eau de Parfume 100ml (NON BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/p3.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              Daisy Dream is a more sophisticated and ethereal version of the original.
              The composition tends to create a "blue effect", made from unusual floral and fruity aromas. 
              There are accords of blackberries, pear, blue wisteria, jasmine and coconut water.
              </div>
              <div class="text-muted" style="font-size:10pt;">
                3 days ago
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Order</button>
            </div>
          </div>
        </div>
      </div>
          <!--Akhir Modal-->
    </div>
  </div>

  <div class="card">
    <img src="image/p5.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Elie Saab Rose Couture</p>
      <p class="card-text"><del>IDR509,000</del> IDR458,100</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
</div>
</div>

 <!-- Pergantian Card --> 
<br/>
<div class="container">
<div class="card-deck">
  <div class="card" >
    <img src="image/p8.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title">YSL Mon Paris</p>
      <br>
      <p class="card-text"><del>SIDR548,000</del> IDR493,000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
  <div class="card">
    <img src="image/p9.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Twilly d’Hermes</p>
      <br>
      <p class="card-text"><del>IDR758,000</del> IDR682,200</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
  <div class="card">
    <img src="image/p10.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Chanel No 5</p>
      <br>
      <p class="card-text">IDR548,000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
  <div class="card">
    <img src="image/p11.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Louis Vuitton Rose Des Vents</p>
      <p class="card-text">IDR558,000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
  <div class="card">
    <img src="image/p12.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" > Victoria’s Secret Bombshell</p>
      <p class="card-text">IDR568,000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
</div>
</div>

<!-- Pergantian Card --> 
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
      <p class="card-title">Gucci Bamboo</p>
      <br>
      <p class="card-text">IDR548,000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
  <div class="card">
    <img src="image/p15.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title">Carolina Herrera Good Girl</p>
      <p class="card-text">IDR609,000</p>
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
</div>
</div>


<br><br>
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
.card-deck{
  width: 75rem;
  padding-right: 20px;
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
@endsection