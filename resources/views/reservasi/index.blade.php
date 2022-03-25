
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('template.head')
  <style>
    .main-sidebar{
        min-height:109% !important;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper p-4">
   
  <!-- /.content-wrapper -->
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <br>
                <h2>Reservasi</h2>
            </div>
            <div class="pull-right">
                
            </div>
        </div>
    </div>
    <br>
    
    <!-- <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
  </div>
<!-- </div> -->
<div class="row">
<div class="col-md-12">
<div class="row">
<form action="{{ route('search') }}" method="POST">
    @csrf
    <div class="row">
    <div class="col">
    <input type="text"name="nm_tamu" class="form-control" style="width:200px;" placeholder="Search.." aria-label="Recipient's username" aria-describedby="button-addon2">

    </div>
    <div class="col">
    <button class="btn btn-danger" type="submit" id="button-addon2">Search</button>

    </div>
    <div class="col">
    <a class="btn btn-warning" href="{{ route('reservasi.index')}}">semua</a>

    </div>
  </div>
  </form>
  </div>
</div>

<div class="col">
  <div class="row">
  <form action="{{ route('reservasi.filter') }}" style="position:absolute; left:800px; top:-40px;" method="POST">
    @csrf
    <div class="row row-md-5">
    <div class="col col-md-6">
    <input class="form-control" type="date" name="tglcekin" id="button-addon2" style="height:40px; width:180px; margin-right:100px">
    </div>
    <div class="col col-md-5">
    <button class="btn btn-warning" type="submit" style="margin-left:50px">cari</button>
    </div>
   
  </div>
   
    </form>
  </div>
</div>
</div>
<br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Pemesan</th>
            <th>Nama Tamu</th>
            <th>Tanggal Check-in</th>
            <th>Tanggal Check-out</th>
            <th>Tipe Kamar</th>
            <th>Jumlah Kamar</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($reservasi as $i => $res)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $res->nm_pemesan}}</td>
            <td>{{ $res->nm_tamu }}</td>
            <td>{{ $res->tglcekin }}</td>
            <td>{{ $res->tglcekout }}</td>
            <td>{{ $res->tipe_kmr}}</td>
            <td>{{ $res->jml_kmr}}</td>
            <td>
                <form action="{{ route('reservasi.destroy', $res->id_reservasi) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('reservasi.show',$res->id_reservasi) }}">Tampil</a>
    
    
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <!-- <aside class="control-sidebar control-sidebar-dark">
    Control sidebar content goes here
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
  @include('template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('template.script')

</body>
</html>



 
