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
  <div class="card" >
    <img src="image/c1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Dunhil Icon</p>
      <p class="card-text" >IDR538.000</p>
      <br>
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
    <img src="image/p.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Estee Lauder Pleasures</p>
      <p class="card-text" >IDR489.000</p>
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
    <img src="image/c2.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Valentino UOMO</p>
      <p class="card-text">IDR548.000</p>
      <br>
      <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#c2">
        Detail Product
      </button>
      <!-- Modal Gambar 2-->
      <div class="modal fade" id="c2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="c2">Eau de Toilette 100ml (WITH BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/c2.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              The composition opens with bergamot and myrtle, succeeded in the heart by roasted coffee combined with 
              gianduja cream, on a rich base created of cedar and precious leather.
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
      <p class="card-text">IDR548.000</p>
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
    <img src="image/c3.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Thierry Mugler A*men Rubber</p>
      <p class="card-text">IDR509.000</p>
      <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#c3">
        Detail Product
      </button>
      <!-- Modal Gambar 3-->
      <div class="modal fade" id="c3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="c3">Eau de Toilette 100ml (WITH BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/c3.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              Scents: sweet, warm spicy, caramel, coffee.
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

<!-- Pergantian Card --> 
<br/>
<div class="container">
<div class="card-deck">
    <div class="card">
        <img src="image/p2.png" class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-title" >Elie Saab Rose Couture</p>
        <p class="card-text">IDR568.000</p>
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
    <img src="image/c4.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Burberry Brit Rhythm</p>
      <p class="card-text">IDR458.000</p>
      <br>
      <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#c4">
        Detail Product
      </button>
      <!-- Modal Gambar 4-->
      <div class="modal fade" id="c4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="c4">Eau de Toilette 100ml (WITH BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/c4.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              Top notes are basil, verbena, cardamom and juniper berries; 
              middle notes are leather, patchouli and styrax; base notes are cedar, incense and tonka bean.
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
      <p class="card-text">IDR548.000</p>
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
      <p class="card-text">IDR509.000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
  <div class="card">
    <img src="image/c5.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Armani Eau D’aromes</p>
      <p class="card-text">IDR418.000.</p>
      <br>
      <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#c5">
        Detail Product
      </button>
      <!-- Modal Gambar 5-->
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

<!-- Pergantian Card --> 
<br/>
<div class="container">
<div class="card-deck">
    <div class="card" >
        <img src="image/p8.png" class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-title">YSL Mon Paris</p>
        <p class="card-text">IDR548.000</p>
        <br>
        <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#p8">
        Detail Product
      </button>
      <!-- Modal Gambar 5-->
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
      <p class="card-text">IDR478.000</p>
      <br>
      <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#c6">
        Detail Product
      </button>
      <!-- Modal Gambar 5-->
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
    <img src="image/c7.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Aigner Pour Homme Blue Emotion</p>
      <p class="card-text">IDR498.000</p>
       <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#c7">
        Detail Product
      </button>
      <!-- Modal Gambar 5-->
      <div class="modal fade" id="c7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="c7">Eau de Toilette 100ml (NON BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/c7.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              Aigner pour Homme Blue Emotion by Etienne Aigner is a Aromatic fragrance for men. Top notes are lavender, mandarin orange, violet leaf, bergamot and lemon; middle notes are coriander, jasmine and cardamom
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
      <p class="card-text">IDR758.000</p>
      <br>
      <!-- Button trigger modal -->
     <button type="button" class="btn btn-dark btn-sm btn-block" data-toggle="modal" data-target="#p9">
        Detail Product
      </button>
      <!-- Modal Gambar 5-->
      <div class="modal fade" id="p9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="p9">Eau de Toilette 100ml (NON BOX)</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div style="text-align:left;">
              <img src="image/p9.png" alt="" style="float:left;height:250px;border-style:solid;border-width:10px;border-color:white;">
              Twilly d'Hermès is an optimistic, lively and youthful fresh floral but not ordinary scent. For this creation, the perfumer was inspired by the free, bold and unpredictable spirit of young girls. It is made of ginger, tuberose and sandalwood notes.
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
    <img src="image/c8.png" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-title" >Salvatore Ferragamo UOMO</p>
      <p class="card-text">IDR489.000</p>
      <a class="btn btn-dark btn-sm btn-block" href="#" role="button" >Detail Product</a>
    </div>
  </div>
</div>
</div>

@endsection

@section('script')
<!-- Pagination -->
<br>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item active"><a class="page-link" href="/shop" style="background:grey;">1</a></li>
    <li class="page-item"><a class="page-link" href="/shop2">2</a></li>
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