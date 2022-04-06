<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="icon" href="{{ asset('img/strawberries-removebg-preview (1).png') }}" type="image/icon type">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light justify-content-center" style="background-color: #d5e386;">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top:8px;">
            <ul class="nav navbar-nav justify-content-center mr-auto">
                <li class="nav-item active">
                    <a class="nav-link fs-5" href="#">
                        <img src="{{ asset('img/strawberries-removebg-preview (1).png') }}" width="40" height="40" class="d-inline-block align-top" alt="" style="margin-top:-10px;">
                        Strawberries Hotel<span class="sr-only-bold">

                        </span></a>
               

                @guest
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link fs-5" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
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
                @endguest
            </ul>
        </div>
    </nav>
    <title>Strawberries Hotel</title>


    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .margin1 {
            margin-right: 0px;
        }

        .margin2 {
            margin-left: -70px;
        }

        .margin3 {
            margin-left: -26px;
        }

        .margin4 {
            margin-left: -27px;
        }

        .margin5 {
            margin-left: -30px;
        }

        .margin6 {
            margin-right: 0px;
        }

        .geser {
            margin-left: 150px;
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

        .circular--square {
            border-radius: 50% 50%;
            margin-left: 50px;
        }

        .circular--square img {
            width: 130px;
            height: 130px;
            border-radius: 50% 50%;
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

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-bold">Welcome to Strawberries Hotel</h1>
                    <p class="font-monospace fs-2">A Best Place To Stay</p>
                    <p class="font-monospace">Curating the world's best luxury hotel experience for you </p>

                </div>
            </div>

        </section>

        <div class="card">
            <div class="card-body" style="background-color: #d5e386;">
                <p class="fs-2">Rooms & Suites</p>
                <p class="font-monospace">Strawberries Hotel stunning and exquisite interior design modern features. </p>

            </div>
        </div>
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" src="{{ asset('img/suite.jpg') }}" width="100%" height="225" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".10em"></text></img>
                            <div class="card-body">
                                <p class="card-text">Superior Room</p>
                                <p class="card-text-font-monospace">

                                    <div class="d-flex justify-content-between align-items-center">


                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" src="{{ asset('img/deluxe.jpg') }}" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" />
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>

                            <div class="card-body">
                                <p class="card-text">Deluxe Room</p>
                                <div class="d-flex justify-content-between align-items-center">


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" src="{{ asset('img/Presidential Suite.jpg') }}" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>

                            <div class="card-body">
                                <p class="card-text">Suite Room</p>
                                <div class="d-flex justify-content-between align-items-center">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="card">
                <div class="card-body" style="background-color: #d5e386;">
                    <p class="fs-2">Hotel Facilities</p>
                    <p class="font-monospace"> </p>
                </div>
            </div>
            <br>
            <p class="fs-3 text-center">Enjoy Our Facilities</p>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4" style="margin-top:10px; margin-left:100px;">
                @foreach($fashotel as $i => $fashotell)
                <div class="col">
                    <div class="circular--square">
                        <img src="{{ url('/fasilitashotel/').'/'.$fashotell->gambar }}" alt="{{ url('/fasilitashotel/').'/'.$fashotell->gambar }}">
                    </div>
                    <br>
                    <p style="font-size:20px; margin-left:95px;">{{$fashotell->nm_fashotel}}</p>
                </div>
                @endforeach
                {{-- <div class="col">
                      <div class="circular--landscape"> <img src="images/woman-portrait.png" />
                          <img src="{{ asset('img/premier.jpg') }}" alt="{{ asset('img/premier.jpg') }}">
            </div>
            <p style="font-size:20px; margin-left:40px;">Nama Fasilitas</p>
        </div>
        <div class="col">
            <div class="circular--landscape"> <img src="images/woman-portrait.png" />
                <img src="{{ asset('img/premier.jpg') }}" alt="{{ asset('img/premier.jpg') }}">
            </div>
            <p style="font-size:20px; margin-left:40px;">Nama Fasilitas</p>
        </div>
        <div class="col">
            <div class="circular--landscape"> <img src="images/woman-portrait.png" />
                <img src="{{ asset('img/premier.jpg') }}" alt="{{ asset('img/premier.jpg') }}">
            </div>
            <p style="font-size:20px; margin-left:40px;">Nama Fasilitas</p>
        </div> --}}
        </div>
        </div>

        </div>
        </div>
        <div class="container">
            <div class="card" style="margin-top:25px;">
                <div class="card-body" style="background-color: #d5e386;">
                    <p class="fs-2">Room Facilities</p>
                    <p class="font-monospace"></p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @foreach($faskmr as $i => $faskmrr)
                <br>
                <br>
                <div class="col">
                    <div class="card shadow-sm" style="margin-top:50px; margin-bottom:50px;">
                        <img class="bd-placeholder-img card-img-top" src="{{ url('/fasilitaskmr2/').'/'.$faskmrr->gambar }}" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="50%" height="50%" fill="#55595c" />
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>

                        <div class="card-body">
                            <p class="card-text">{{$faskmrr->tipekamar}}</p>
                            <p class="card-text">{{$faskmrr->nm_faskmr}}</p>
                            <div class="d-flex justify-content-between align-items-center">


                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                @endforeach
            </div>
        </div>
        </div>
        </div>
    </main>

    <footer class="text-muted py-5" style="background-color: #d5e386;">
        <div class="container" style="background-color: #d5e386;">
            <p class="float-end mb-1">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#d68d96" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg></a>
            </p>
            <p class="mb-1">Copyright © 2022 DELILA S R. All rights reserved.</p>
        </div>
    </footer>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


</body>
</html>
