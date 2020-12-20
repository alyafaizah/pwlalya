<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1c604228ee.js" crossorigin="anonymous"></script>

    <title>Ringkasan Pemesanan</title>
  </head>
  <body>
 <!-- awal navbar -->
 <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand font-weight-bold "style="color: #fafafa" href="/home1">Keretaku</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                <li class="nav-item ">
                    <a class="nav-link " style="color: #fafafa" >1. Pesan </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " style="color: #fafafa" > ⇢ </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" style="color: #fafafa">2. Bayar </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " style="color: #fafafa" > ⇢ </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" style="color: #fafafa">3. Selesai</a>
                </li>
                </ul>
        </div>
        </div>
        </nav>
        <!-- akhir navbar -->
  <div class="container" style="margin-top:70px;">
    <h3 style="color:black;text-align:center;">Detail Perjalanan</h3>
   
    <img src="image/d1.png" alt="" style="margin-left:250px;width:600px;">
    <br>
    <br>
    <br>
    <h3 style="text-align:center;">Detail Pemesan</h3>
    <br>

    <!-- card -->
    <div class="card col-md-7" style="margin-left:230px;">
    <div class="card-body ">
    <form class>
    <div class="form-group">
    <div class="col-md-4 mb-3">
        <label for="formGroupExampleInput">Nama Lengkap</label>
        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="ALYA NICKEN" style="font-weight:bold;">
    </div>
    </div>
    <div class="form-group">
    <div class="col-md-6 mb-3">
        <label for="formGroupExampleInput">Email</label>
        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="alya.nicken0217@gmail.com" style="font-weight:bold;">
    </div>
    </div>
    <div class="form-group">
    <div class="col-md-4 mb-3">
        <label for="formGroupExampleInput">Nomor Telepon</label>
        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="089561899920" style="font-weight:bold;">
    </div>
    </div>
    <p style="font-size:11pt;">Informasi Tiket dan konfirmasi akhir akan dikirimkan ke detail kontak yang tertera.</p>
    </form>
    </div>
    </div>
    <br>
    <br>
    
    <!-- Deatil Penumpang-->
    <div class="card" style="width:40rem;margin-left:235px;">
        <h5 class="card-header" style="background:#CF570C;color:white;"><i class="fas fa-users"> Detail Penumpang</i></h5>
    <div class="card-body">
    <form>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom04"></label>
                <select class="custom-select" id="validationCustom04" style="font-weight: bold;" required>
                    <option selected disabled value="">Tipe ID</option>
                    <option>KTP</option>
                    <option>SIM</option>
                    <option>Paspor</option>
                    <option>Lainnya</option>
                </select>
            </div>
            <div class="col-md-4">
            <label for="validationCustom04"></label>     
             <input type="text" class="form-control" placeholder="No ID" style="font-weight:bold;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
            <label for="validationDefault01">Nama Lengkap</label>
            <input type="text" class="form-control" id="validationDefault01" placeholder="Nama Lengkap" value="Alya Nicken" required style="font-weight:bold;">
            </div>
        </div>
        <p style="font-size:11pt;">Penumpang dibawah 17 tahun dapat mengisi dengan nomor kartu pelajar atau tanggal lahir (ddmmyy)</p>
    </form>
    </div>
    </div>
    <br>
    <a class="btn" href="#" role="button" style="background:#CF570C;margin-left:455px;width:200px;color:white;">Lanjutkan</a>
    <br>
    <br>
    <div class="card-footer text-muted text-center">
        @jalannjalannaikkereta
        <br>
        <br>
    </div>
    <!-- Deatil Penumpang-->

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<!-- Style CSS -->
<style type="text/css">
            .navbar{
                background: #D0560D;
            }
            .nav-item{
                list-style-type: none;
                color: #fafafa;
                margin-top: -5px;
            }
            .navbars{
                margin-top: 10px;
            }
            body{
                background: #f7f8f7;
            }
 </style>