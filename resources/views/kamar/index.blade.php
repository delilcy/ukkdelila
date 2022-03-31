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

        /* CSS */
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
            font-size: 14px;
            font-weight: 500;
            line-height: 14px;
            min-height: 40px;
            outline: 0;
            padding: 12px 15px;
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
                        <h1>Kamar</h1>
                    </div>
                    <div class="pull-right">
                    <button class="button-24" role="button" href="{{ route('kamar.create') }}">Input Data</button>
                        
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
                    <th>Tipe Kamar</th>
                    <th>Jumlah Kamar</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($kamar as $i => $kam)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $kam->tipe_kamar }}</td>
                    <td>{{ $kam->jml_kamar }}</td>
                    <td>
                        <form action="{{ route('kamar.destroy', $kam->id_kamar) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('kamar.show',$kam->id_kamar) }}">Tampil</a>

                            <a class="btn btn-primary" href="{{ route('kamar.edit',$kam->id_kamar) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>

            {!! $kamar->links() !!}
        </div>
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
    <footer class="main-footer" background-color: #c284a6;>
        @include('template.footer')
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('template.script')

</body>
</html>
