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
            font-weight: 800;
            line-height: 16px;
            min-height: 40px;
            outline: 0;
            padding: 12px 14px;
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
                        <h2>Edit Data Kamar</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn button-24" href="{{ route('kamar.index') }}"> Kembali</a>
                    </div>
                </div>
            </div>
<br>
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Edit Gagal</strong> Maaf ada kesalahan saat input data<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('kamar.update', $kamar[0]->id_kamar) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    </div>
                    <input type="hidden" name="id_kamar" value="{{ $kamar[0]->id_kamar }}">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Tipe Kamar:</strong>
                            <input type="text" class="form-control" name="tipe_kamar" placeholder="tipe kamar" value="{{ $kamar[0]->tipe_kamar }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Jumlah Kamar:</strong>
                            <input type="number" class="form-control " name="jml_kamar" placeholder="jumlah kamar" value="{{ $kamar[0]->jml_kamar }}">
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn button-24">EDIT</button>
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
