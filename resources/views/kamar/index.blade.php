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
                        <h2>Kamar</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('kamar.create') }}"> Input Data</a>
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
