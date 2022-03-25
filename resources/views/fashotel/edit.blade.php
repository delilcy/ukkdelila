
 
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
  <div class="content-wrapper p-4">
   
  <!-- /.content-wrapper -->
  <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data Fasilitas Hotel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('fashotel.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Edit Gagal</strong> Maaf ada kesalahan saat input data<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('fashotel.update', $fasilitashotel[0]->id_fashotel) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Fasilitas Hotel:</strong>
                    <input type="text" name="nm_fashotel" value="{{ $fasilitashotel[0]->nm_fashotel }}" class="form-control" placeholder="nama">
                </div>
            </div>
            <input type="hidden" name="id_fashotel" value="{{ $fasilitashotel[0]->id_fashotel }}">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan:</strong>
                    <textarea class="form-control" style="height:150px" name="keterangan" placeholder="keterangan">{{ $fasilitashotel[0]->keterangan }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Gambar</strong>
        <input type="file" class="form-control" name="gambar" style="height:50px" value="{{ $fasilitashotel[0]->gambar }}">
        
        </div>
        </form>
       
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <br>
              <button type="submit" class="btn btn-primary">EDIT</button>
            </div>
        </div>
   
    </form>
  <!-- /.content-wrapper -->
  </div>
  <!-- Control Sidebar -->
  </div>
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


  
@section('content')
   
@endsection