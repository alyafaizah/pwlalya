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

<div class="container">
<div class="card-deck">
  <div class="card" >
    <img src="image/c1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Dunhil Icon</p>
      <br>
      <p class="card-text" ><del>IDR538,000</del> IDR484,200</p>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#c1">
        Detail Product
      </button>
      <!-- Modal Gambar 1-->
      <div class="modal fade" id="c1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="c1">Eau de Parfum 100ml (NON BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/c1.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              The man who will wear Icon is a masculine and sophisticated gentleman. 
              The composition is aromatic- woody with an opening of fresh bergamot and neroli absolute. 
              Its heart includes spicy and aromatic notes of black pepper, lavender and cardamom, leaning on a woody base of smoky oud, vetiver, leather and oak moss.
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
    <img src="image/c5.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Armani Eau D’aromes</p>
      <br>
      <p class="card-text"><del>IDR418,000</del> IDR376,200</p>
        <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#c5">
        Detail Product
      </button>
      <!-- Modal Gambar 2-->
      <div class="modal fade" id="c5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="c5">Eau de Toilette 100ml (NON BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/c5.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              Armani Eau d'Aromes by Giorgio Armani is a Woody Spicy fragrance for men. Armani Eau d'Aromes was launched in 2014. 
              Top notes are bergamot and mandarin orange; middle notes are ginger and patchouli; base notes are vetiver, cardamom and sage.
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

  <div class="card" >
    <img src="image/c6.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title">CK One</p>
      <br>
      <p class="card-text"><del>IDR478,000</del> IDR430,200</p>
      <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#c6">
        Detail Product
      </button>
      <!-- Modal Gambar 3-->
      <div class="modal fade" id="c6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="c6">Eau de Parfume 200ml (NON BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/c6.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              Top notes: pineapple, green notes, mandarin orange, papaya, bergamot, cardamom dan lemon. <br>
                Middle notes: nutmeg, violet, orris root, jasmine, lilly-of-the-valley, rose and freesia. <br>
                Base notes: sandalwood, amber, musk, cedar, oakmoss, greentea and green accord.
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
    <img src="image/c9.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Bvlgari Man In Black</p>
      <br>
      <p class="card-text"><del>IDR540,000</del> IDR486,000</p>
      <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#c9">
        Detail Product
      </button>
      <!-- Modal Gambar 4-->
      <div class="modal fade" id="c9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="c9">Eau de Parfume 100ml (NON BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/c9.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              This parfume is an intense composition Of amber, leather, spices and woods. Opens with accords if natural rum and luminous spices
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

  <div class="card" >
    <img src="image/c11.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title">212 Sexy Men</p><br>
      <p class="card-text"><del>IDR558,000</del> IDR502,200</p>
     <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#c11">
        Detail Product
      </button>
      <!-- Modal Gambar 5-->
      <div class="modal fade" id="c11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="c11">Eau de Toilette 100ml (NON BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/c11.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              Top notes are mandarin orange, bergamot and green notes; middle notes are cardamom, flowers and pepper; base notes are vanilla, sandalwood, guaiac wood, musk and
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
</div>
</div>
<!--pergantian card-->
<br>
<div class="container">
<div class="card-deck">
<div class="card">
    <img src="image/c15.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title">Coach for Men</p>
      <p class="card-text"><del>IDR498.000</del> IDR448,200</p>
      <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#c11">
        Detail Product
      </button>
      <!-- Modal Gambar 5-->
      <div class="modal fade" id="c11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="c15">Eau de Toilette 100ml (NON BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/c15.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              Coach for Men is a woody scent with a fresh opening. Top notes: green nashi pear, bergamot, kumquat. Heart: cardamom, coriander, geranium. Base: vetiver Haiti LMR, suede, ambergris. Actor James Franco is the face of the fragrance, embodying the ideal of a cool American guy.
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
  <div class="card"></div>
  <div class="card"></div>
  <div class="card"></div>
  <div class="card"></div>
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
