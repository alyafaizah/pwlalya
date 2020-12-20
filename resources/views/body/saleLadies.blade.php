@extends('body.master')
@section('title','Sales Parfume')
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

<!--card-->
<br><br>
<div class="container">
<div class="card" style="background:#8B0000;">
  <div class="card-body" style="color:white;text-align:center;">
    <div class="text">
    <h1><strong>NOW UP TO 10% OFF</strong></h1>
    </div>
    <h5>QUICK SHOPPING</h5>
  </div>
</div>
</div>
<!-- akhir card-->
<br><br>
<!--card catalog-->
<div class="container">
<div class="card-deck">
  <div class="card">
    <img src="image/p1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Chanel Coco Mademoiselle</p>
      <p class="card-text"><del>IDR548,000</del> IDR493,000</p>
     <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#p1">
        Detail Product
      </button>
      <!-- Modal Gambar 1-->
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
              <br>
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
      <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#p5">
        Detail Product
      </button>
      <!-- Modal Gambar 2-->
      <div class="modal fade" id="p5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="p5">Eau de Toilette 100ml (NON BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/p5.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              Top notes: include orange blossom, bergamot and mandarin. <br>
              Middle notes: floral, composed camelia, gardenia and lily. <br>
              Base notes: sandalwood and bright musk
              </div>
              <br>
              <div class="text-muted" style="font-size:10pt;">
                7 days ago
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

  <div class="card" >
    <img src="image/p8.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title">YSL Mon Paris</p>
      <br>
      <p class="card-text"><del>SIDR548,000</del> IDR493,000</p>
      <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#p8">
        Detail Product
      </button>
      <!-- Modal Gambar 3-->
      <div class="modal fade" id="p8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="p8">Eau de Parfume 90ml (NON BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/p8.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              With fruity start, floral heart and dark chyper. Open with a juicy and blend of calabria bergamot, strawberry, rasberry and pear
              </div>
              <br>
              <div class="text-muted" style="font-size:10pt;">
                7 days ago
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
    <img src="image/p9.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Twilly d’Hermes</p>
      <br>
      <p class="card-text"><del>IDR758,000</del> IDR682,200</p>
      <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#p9">
        Detail Product
      </button>
      <!-- Modal Gambar 4-->
      <div class="modal fade" id="p9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="p9">Eau de Parfume 85ml (NON BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/p9.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              Twilly d'Hermès is an optimistic, lively and youthful fresh floral but not ordinary scent. For this creation, the perfumer was inspired by the free, bold and unpredictable spirit of young girls. It is made of ginger, tuberose and sandalwood notes.
              </div>
              <br>
              <div class="text-muted" style="font-size:10pt;">
                1 month ago
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

  <div class="card" >
    <img src="image/p18.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Louis Vuitton Apogee</p>
      <br>
      <p class="card-text" ><del>IDR588,000</del>IDR529,200</p>
      <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#p18">
        Detail Product
      </button>
      <!-- Modal Gambar 5-->
      <div class="modal fade" id="p18" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="p18">Eau de Parfume 85ml (NON BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/p18.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              Top notes: litchi, yuzu, pineapple leaf and mandarin orange. <br>
              Middle notes: peony, peach blossom and pear. <br>
              Base notes: white musk and white woods 
              </div>
              <br>
              <div class="text-muted" style="font-size:10pt;">
                1 month ago
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
