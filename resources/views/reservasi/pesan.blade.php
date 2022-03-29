<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <nav class="navbar navbar-expand-lg fixed-top  navbar-light" style="background-color: #fa9e96;">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        <img src="{{ asset('img/strawberries-removebg-preview (1).png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
                        Strawberries Hotel<span class="sr-only-bold">

                        </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('beranda')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>


        </div>
    </nav>
    <title>Strawberries Golden Hotel</title>




    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">



    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .margin1 {
            margin-right: 50px;
        }

        .margin2 {
            margin-right: 120px;
        }

        .margin3 {
            margin-right: 84px;
        }

        .margin4 {
            margin-right: 75px;
        }

        .margin5 {
            margin-right: 75px;
        }

        .margin6 {
            margin-right: 60px;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 6.5rem;
            }
        }

    </style>


</head>
<body>

    <header>

        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        </div>
    </header>

    <main>
        <div class="content-wrapper p-4">
            <br>
            <br>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>Nama Tamu</th>
                        <th>Tanggal Check-in</th>
                        <th>Tanggal Check-out</th>
                        <th>Tipe Kamar</th>
                        <th>Jumlah Kamar</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($pesan as $i => $pes)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $pes->nm_pemesan}}</td>
                        <td>{{ $pes->nm_tamu }}</td>
                        <td>{{ $pes->tglcekin }}</td>
                        <td>{{ $pes->tglcekout }}</td>
                        <td>{{ $pes->tipe_kmr}}</td>
                        <td>{{ $pes->jml_kmr}}</td>
                        <td>
                            <form action="{{ route('cetak', $pes->id_reservasi) }}" method="POST" target="_blank">

                                @csrf

                                <button type="submit" class="btn btn-danger">Cetak</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </table>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </main>

    <footer class="main-footer">
        @include('template.footer')
    </footer>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


</body>
</html>
