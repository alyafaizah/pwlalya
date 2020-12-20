<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Halaman Daftar</title>
  </head>
  <body>
    <form class="needs-validation" novalidate style="position:absolute;top:100px;left:26%;transform:translateX(-50);">
    <div class="form-row">
        <div class="col-md-4 mb-3">
        <label for="validationCustom01">Nama Depan</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="nama depan" required>
            <div class="valid-feedback">
            Valid
            </div>
        </div>
        <div class="col-md-4 mb-3">
        <label for="validationCustom02">Nama Belakang</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="nama belakang" required>
            <div class="valid-feedback">
            Valid
            </div>
        </div>
        <div class="col-md-4 mb-3">
        <label for="validationCustomUsername">Nama Pengguna</label>
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            </div>
            <input type="text" class="form-control" id="validationCustomUsername" placeholder="nama pengguna" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
            Silahkan buat nama pengguna
            </div>
        </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="email">
        </div>
        <div class="form-group">
        <label for="inputPassword6">Kata Sandi</label>
        <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" placeholder="katasandi">
        <small id="passwordHelpInline" class="text-muted">
            Panjang harus 8-20 karakter.
        </small>
  </div>
    </div>
    <div class="form-row">
        <div class="col-md-3 mb-3">
        <label for="validationCustom03">Provinsi</label>
        <input type="text" class="form-control" id="validationCustom03" placeholder="provinsi" required>
        <div class="invalid-feedback">
            Berikan provinsi yang valid.
        </div>
        </div>
        <div class="col-md-3 mb-3">
        <label for="validationCustom04">Kota/kabupaten</label>
        <input type="text" class="form-control" id="validationCustom04" placeholder="kota" required>
        <div class="invalid-feedback">
            Berikan kota yang valid.
        </div>
        </div>
        <div class="col-md-3 mb-3">
        <label for="validationCustom05">Zip</label>
        <input type="text" class="form-control" id="validationCustom05" placeholder="kode pos" required>
        <div class="invalid-feedback">
            Berikan kode pos yang valid.
        </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-10">
        <label for="inputAddress">Alamat</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="alamat">
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
            Setuju dengan syarat dan ketentuan
        </label>
        <div class="invalid-feedback">
            Anda harus menyetujui sebelum mengajukan
        </div>
        </div>
    </div>
    <a class="btn" href="/desin" role="button" style="background:#B0C4DE;">Submit form</a>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<!-- Style CSS -->
<style type="text/css">
            body{
                background: #f7f8f7;
            }
            
 </style>