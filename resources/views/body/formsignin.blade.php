<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Signin Page</title>
  </head>
  <body>
  <h1 class="text-center" style="margin-top:100px;font-family:DFMincho-UB;font-size:20pt;">
    Sign In As Bomb Parfum's Admin
    </h1>
    <form class="needs-validation" novalidate style="position:absolute;top:180px;left:26%;transform:translateX(-50);">
    <div class="form-row">
        <div class="col-md-4 mb-3">
        <label for="validationCustom01">First Name</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="first name" required>
            <div class="valid-feedback">
            Valid
            </div>
        </div>
        <div class="col-md-4 mb-3">
        <label for="validationCustom02">Last Name</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="last name" required>
            <div class="valid-feedback">
            Valid
            </div>
        </div>
        <div class="col-md-4 mb-3">
        <label for="validationCustomUsername">Username</label>
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            </div>
            <input type="text" class="form-control" id="validationCustomUsername" placeholder="username" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
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
        <label for="inputPassword6">Password</label>
        <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" placeholder="password">
        <small id="passwordHelpInline" class="text-muted">
        Must be 8-20 characters long.
        </small>
  </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-10">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="address">
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
            Anda harus menyetujui sebelum mengajukan
        </div>
        </div>
    </div>
    <a class="btn" href="/desin" role="button" style="background:#DEB887">Submit form</a>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>