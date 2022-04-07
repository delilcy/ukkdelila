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
            min-height: 106% !important;
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
                        <h2>Fasilitas Hotel</h2>
                    </div>


                    <div class="pull-right">
                        <a class="btn button-24" href="{{ route('fashotel.create') }}"> Input Data</a>
                    </div>
                </div>
            </div>
            <br>
            @if ($message = Session::get('success'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p>{{ $message }}</p>
            </div>
            @endif

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <table class="table table-bordered">
                        <tr>
                            <th class="bg-danger">No</th>
                            <th class="bg-danger">Nama Fasilitas Hotel</th>
                            <th class="bg-danger">Keterangan</th>
                            <th class="bg-danger">Gambar</th>
                            <th class="bg-danger" width="280px">Action</th>
                        </tr>
                        @php
                        $a = 5 * $halaman;
                        $b = 5 * ( $halaman - 1 );
                        @endphp
                        @foreach ($fasilitashotel as $i => $fas)
                        <tr>
                            <td>@if($halaman > 1) {{ ++$b }} @else {{ ++$i }} @endif</td>
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
            {!! $fasilitashotel->links() !!}
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
