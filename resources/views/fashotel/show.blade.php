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

        .button-24 {
            background: #d68d96;
            border: 1px solid #d68d96;
            border-radius: 6px;
            box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: nunito, roboto, proxima-nova, "proxima nova", sans-serif;
            font-size: 16px;
            font-weight: 600;
            line-height: 14px;
            min-height: 35px;
            outline: 0;
            padding: 10px 15px;
            text-align: center;
            text-rendering: geometricprecision;
            text-transform: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: middle;
        }

        .button-24:hover,
        .button-24:active {
            background-color: initial;
            background-position: 0 0;
            color: #FF4742;
        }

        .button-24:active {
            opacity: .5;
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
                        <h2> Fasilitas Hotel </h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn button-24" href="{{ route('fashotel.index') }}"> Kembali</a>
                    </div>
                </div>
            </div>
        
            <form disabled>
                <div class="form-group">

                    <br>
                    <img src="{{ url('/fasilitashotel2/') . '/' . $fasilitashotel[0]->gambar}}" alt="{{$fasilitashotel[0]->gambar}}" style="width:150px; height:150px">

                </div>

                <div class="mb-2">
                    <label class="form-label">Nama Fasilitas Hotel</label>
                    <input class="form-control" style="width:150px;" value="  {{ $fasilitashotel[0]->nm_fashotel }}" disabled>

                </div>
                <div class="mb-2">
                    <label class="form-label">Keterangan</label>
                    <input class="form-control" value=" {{ $fasilitashotel[0]->keterangan }}" disabled>
                </div>

            </form>
            {{-- <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Fasilitas Hotel:</strong>
                        {{ $fasilitashotel[0]->nm_fashotel }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Keterangan:</strong>
            {{ $fasilitashotel[0]->keterangan }}
        </div>
    </div> --}}
    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Gambar:</strong>
            <br>
            <br>
            <img src="{{ url('/fasilitashotel2/') . '/' . $fasilitashotel[0]->gambar}}" alt="{{$fasilitashotel[0]->gambar}}" style="width:150px; height:150px">

        </div>
    </div>
    </div> --}}
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
