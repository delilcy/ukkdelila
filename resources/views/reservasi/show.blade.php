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
            min-height: 100% !important;
        }

        .margin1 {
            /* margin-right: 10px; */
            text-align: left;
        }

        .geser {
            margin-left: 275px;
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
                        <h2> Data Reservasi </h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn button-24" href="{{ route('reservasi.index') }}"> Kembali</a>
                    </div>
                </div>
            </div>
            <br>
            <div class="card text-center" style="max-width: 70rem; ">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label margin1">Nama Pemesan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" value="{{ $reservasi->nm_pemesan}}" disabled>
                        </div>
                        <br>
                        <br>
                        <label for="inputPassword" class="col-sm-2 col-form-label margin1">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" value="{{ $reservasi->email}}" disabled>
                        </div>
                        <br>
                        <br>
                        <label for="inputPassword" class="col-sm-2 col-form-label margin1">No. Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" value="{{$reservasi->notlp}}" disabled>
                        </div>
                        <br>
                        <br>
                        <label for="inputPassword" class="col-sm-2 col-form-label margin1">Nama Tamu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" value="{{$reservasi->nm_tamu}}" disabled>
                        </div>
                        <br>
                        <br>
                        <label for="inputPassword" class="col-sm-2 col-form-label margin1">Tipe Kamar</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" value="{{$reservasi->tipe_kmr}}" disabled>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="row g-3 geser">
                            <div class="col-md" style="margin-center">
                                <div class="form-floating">

                                    <label for="floatingInputGrid">Check In</label>
                                    <input type="text" name="tglcekin" class="form-control" id="floatingInputGrid" value="{{$reservasi->tglcekin}}" disabled>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <label for="floatingInputGrid">Check Out</label>
                                    <input type="text" name="tglcekout" class="form-control" id="floatingInputGrid" value="{{$reservasi->tglcekout}}" disabled>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-floating">
                                    <label for="floatingInputGrid">Jumlah Kamar</label>
                                    <input type="text" name="jml_kmr" class="form-control" id="floatingInputGrid" value="{{$reservasi->jml_kmr}}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nama Pemesan:</strong>
                                {{ $reservasi->nm_pemesan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Tamu:</strong>
                    {{ $reservasi->nm_tamu }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Check-in:</strong>
                    {{ $reservasi->tglcekin }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Check-out:</strong>
                    {{ $reservasi->Tglcekout }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipe Kamar:</strong>
                    {{ $reservasi->tipe_kmr }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Kamar:</strong>
                    {{ $reservasi->jml_kmr }}
                </div>
            </div>
        </div> --}}
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    </div>
    <!-- Control Sidebar -->
    <!-- <aside class="control-sidebar control-sidebar-dark">
    Control sidebar content goes here
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  /.control-sidebar -->

    </div>
    <!-- Main Footer -->
    <footer class="main-footer">
        @include('template.footer')
    </footer>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('template.script')

</body>
</html>
