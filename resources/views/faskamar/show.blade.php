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
                        <h2> Tampilkan Fasilitas Kamar </h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('faskamar.index') }}"> Kembali</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Fasilitas Kamar:</strong>
                        {{ $fasilitaskmr[0]->nm_faskmr }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Tipe Kamar:</strong>
                        {{ $fasilitaskmr[0]->tipekamar }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Gambar:</strong>
                        <br>
                        <br>
                        <img src="{{ url('/fasilitaskmr2/') . '/' . $fasilitaskmr[0]->gambar}}" alt="{{$fasilitaskmr[0]->gambar}}" style="width:40%; height:40%">

                    </div>
                </div>
            </div>
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
