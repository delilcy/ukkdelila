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
                        <h2>Fasilitas Hotel</h2>
                    </div>


                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('fashotel.create') }}"> Input Data</a>
                    </div>
                </div>
            </div>
            <br>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama Fasilitas Hotel</th>
                            <th>Keterangan</th>
                            <th>Gambar</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($fasilitashotel as $i => $fas)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $fas->nm_fashotel }}</td>
                            <td>{{ $fas->keterangan }}</td>
                            <td>
                                <img src="{{ url('/fasilitashotel/') . '/' . $fas->gambar}}" alt="{{$fas->gambar}}"> </td>
                            <td>
                                <form action="{{ route('fashotel.destroy', $fas->id_fashotel) }}" method="POST">

                                    <a class="btn btn-info" href="{{ route('fashotel.show',$fas->id_fashotel) }}">Tampil</a>

                                    <a class="btn btn-primary" href="{{ route('fashotel.edit',$fas->id_fashotel) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
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

@section('content')


{!! $fasilitashotel->links() !!}

@endsection
