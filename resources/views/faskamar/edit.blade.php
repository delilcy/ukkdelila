<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('template.head')
    <style>
        .main-sidebar {
            min-height: 109% !important;
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
                        <h2>Edit Data Fasilitas Kamar</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('faskamar.index') }}"> Kembali</a>
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

            <form action="{{ route('faskamar.update', $fasilitaskmr[0]->id_faskmr) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nama Fasilitas Kamar:</strong>
                            <input type="text" name="nm_faskmr" value="{{ $fasilitaskmr[0]->nm_faskmr }}" class="form-control" placeholder="nama">
                        </div>
                    </div>
                    <input type="hidden" name="id_faskmr" value="{{ $fasilitaskmr[0]->id_faskmr }}">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tipe Kamar:</strong>
                            <textarea class="form-control" style="height:150px" name="tipekamar" placeholder="tipe kamar">{{ $fasilitaskmr[0]->tipekamar }}</textarea>
                        </div>
                    </div>
                    <form>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Gambar</label>
                                <input type="file" class="form-control" name="gambar" style="height:50px" value="{{ $fasilitaskmr[0]->gambar }}">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
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

@section('content')

@endsection
