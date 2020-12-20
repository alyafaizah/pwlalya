<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1c604228ee.js" crossorigin="anonymous"></script>

    <title>Keretaku</title>
        </head>
        <body>
        <!-- awal navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand font-weight-bold "style="color: #fafafa" href="#">Keretaku</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-4">
                
                </ul>
                
                <div class="icon">
                    <h5>
                        <a href="#" style="color: #fafafa;"><i class="fas fa-clipboard-list mr-3"></i></a>
                        <a href="#" style="color: #fafafa;"><i class="fas fa-ticket-alt mr-3"></i></a>
                        <a href="/desin" style="color: #fafafa;"><i class="fas fa-user-circle"></i></a>
                    </h5>
                </div>
        </div>
        </nav>
        <!-- akhir navbar -->

        <!-- Awal Jumbotron 1 -->
        <div class="container">
        <div class="jumbotrons jumbotron-fluid">
        <nav class="navbars navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar w/ text</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Cek Pesanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ubah Jadwal</a>
            </li>
            </ul>
            <span class="navbar-text">
            <i class="fas fa-shopping-cart mr-3"> Keranjang</i>
            <i class="fas fa-star-half-alt mr-3"> Poin</i>
            </span>
        </div>
        </nav>
        </div>
        </div>
        <!-- Akhir Jumbotron 1 -->

        <!-- awal Carousel -->
        <div class="container ">
        <div id="carouselExampleSlidesOnly" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <img src="image/kereta.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        </div>
        </div>
        <!-- akhir carousel -->

        <!-- awal Card -->
        <div class="container ">
        <div class="card text-left">
        <div class="card-header" style="background: #D0560D">
            <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" style="color: #D0560D" href="#">Antar Kota</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"style="color: #ffffff" href="/lokal">Lokal</a>
            </li>
            </ul>
        </div>
        <div class="card-body">
        <form class="needs-validation" novalidate>
        <div class="form-row">
            <div class="col-md-6 mb-3" >
            <label for="validationCustom1">Asal</label>
            <input type="text" class="form-control" id="validationCustom1"  placeholder="Asal" style="color: #D0560D; font-weight: bold;" required>
            </div>
        <div class="col-md-6 mb-3" >
            <label for="validationCustom2">Tujuan</label>
            <input type="text" class="form-control " id="validationCustom2" placeholder="Tujuan" style="color: #D0560D; font-weight: bold;" required>
            </div>
            </div>
        <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationCustom04">Keberangkatan</label>
            <select class="custom-select" id="validationCustom04" placeholder="Tujuan" style="color: #D0560D; font-weight: bold;" required>
                <option selected disabled ></option>
                <option>7 Des 2020</option>
                <option>8 Des 2020</option>
                <option>9 Des 2020</option>
                <option>10 Des 2020</option>
                </select>
        </div>
        <div class="col-md-6 mb-3">
            <label for="validationCustom04">Kembali</label>
            <select class="custom-select" id="validationCustom04" style="color: #D0560D; font-weight: bold;" required>
                <option selected disabled value="pilih tanggal"></option>
                <option>7 Des 2020</option>
                <option>8 Des 2020</option>
                <option>9 Des 2020</option>
                <option>10 Des 2020</option>
                </select>
        </div>
        </div>
        <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="customSwitch1" >
        <label class="custom-control-label" for="customSwitch1" style="color: #D0560D">Pulang Pergi</label>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom04">Kelas</label>
                <select class="custom-select" id="validationCustom04" style="color: #D0560D; font-weight: bold;" required>
                    <option>UMUM</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom04"><i class="fas fa-male"></i></label>
                <select class="custom-select" id="validationCustom04" style="color: #D0560D; font-weight: bold;" required>
                    <option selected disabled value="">Dewasa</option>
                    <option>1 Dewasa</option>
                    <option>2 Dewasa</option>
                    <option>3 Dewasa</option>
                    <option>4 Dewasa</option>
                    <option>5 Dewasa</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom04"><i class="fas fa-baby"></i></label>
                <select class="custom-select" id="validationCustom04" style="color: #D0560D; font-weight: bold;" required>
                    <option selected disabled value="">Bayi</option>
                    <option>0 Bayi</option>
                    <option>1 Bayi</option>
                    <option>2 Bayi</option>
                    <option>3 Bayi</option>
                    <option>4 Bayi</option>
                    <option>5 Bayi</option>
                </select>
            </div>
            </div>
            <button class="btns btn-primary" type="submit" style="background: #D0560D; border: none;" >Pesan</button>
            </form>

            <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
                });
            }, false);
            })();
            </script>
        <!-- akhir Card -->

        <!-- Awal Footer -->
        <br>
        <footer class="footer">
            <div class=" text-center pt-3 pb-3" style="font-size: 15px">
            ©️ 2020 Keretaku NICKEN ALYA. All Right Reserved
            </div>
        </footer>
        <!-- Akhir Footer -->

        <!-- Style CSS -->
        <style type="text/css">
            .container-jumbo{
                box-shadow: 5px 4px 8px #888888;
                text-align: center;
                font-family: lucida console;
                height: 20px;
                font-weight: light;
                margin-top: -99px;

            }
            .jumbotrons{
                text-align: center;
                font-family: lucida console;
                height: 160px;
                margin-top: -40px;
                background: #f7f7f7;
            }
            .carousel-inner{
                margin-top: -70px;
                height: 250px;
                margin-left: auto !important;
            }
            .navbar{
                background: #D0560D;
            }
            .card{
                border-radius: 10px;
                margin-top: -100px;
                height: 400px;
                width: 900px;
                margin-left: 105px;
                border: none;
                box-shadow: 4px 4px 8px #888888;
            }
            .btns{
                padding: 3px 80px;
                border-radius: 5px;
                margin-left: 655px;
                font-weight: bold;
            }
            .navbars{
                margin-top: 10px;
            }
            body{
                background: #f7f8f7;
            }
        </style>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>