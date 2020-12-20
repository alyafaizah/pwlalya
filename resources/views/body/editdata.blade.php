
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Update Inventory</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/ladies">Home</a></li>
              <li class="breadcrumb-item active">Update Inventory</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
       
      </div>

    <div class="card-body">
        <form action="{{route('update',$brg->id)}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Name Stuff" value="{{$brg->nama_barang}}">
        </div>
        <div class="form-group">
        <input type="textarea" id="gambar" name="gambar" class="form-control" placeholder="picture" value="{{$brg->gambar}}">
            </div>
        <div class="form-group">
            <input type="textarea" id="harga" name="harga" class="form-control" placeholder="Price" value="{{$brg->harga}}">
            </div>
        <div class="form-group">
            <input type="textarea" id="detail" name="detail" class="form-control" placeholder="Detail" value="{{$brg->detail}}">
            </div>
        <div class="form-group">
            <input type="textarea" id="deskripsi"  name="deskripsi" class="form-control" placeholder="Description" value="{{$brg->deskripsi}}">
            </div>
        <div class="form-group">
            <button type="submit" class="btn btn-secondary">Update Inventory</button>
        </div>
        </form>
            
        </div>
      </div>

    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    @include('template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('adminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
