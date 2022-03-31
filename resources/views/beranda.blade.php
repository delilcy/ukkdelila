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
                      <a class="nav-link fs-5" href="#">
                          <img src="{{ asset('img/strawberries-removebg-preview (1).png') }}" width="40" height="40" class="d-inline-block align-top" alt="">
                          Strawberries Hotel<span class="sr-only-bold">

                          </span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link fs-5" href="{{route('beranda')}}">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link fs-5" href="{{route('pesanan')}}">Pesanan</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link fs-5 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
              border-radius:50% 50%;
              margin-left:50px;
          }
          .circular--square img {
              width: 130px;
              height:130px;
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
                      <p class="font-monospace">Curating the world's best luxury hotel experience for you </p>

                  </div>
              </div>

              <form action="{{ route('pesan') }}" method="POST">
                  @csrf
                  @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                      <p>{{ $message }}</p>
                  </div>
                  @endif
                  @if ($errors->any())
                  <div class="alert alert-danger">
                      <strong>Maaf</strong> Data yang anda inputkan bermasalah.<br><br>
                      <ul>
                          @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
                  <div class="row g-2 geser">
                      <div class="col-md">
                          <div class="form-floating">
                              <input type="date" name="tglcekin" class="form-control" id="floatingInputGrid">
                              <label for="floatingInputGrid geser">Check In</label>
                          </div>
                      </div>
                      <div class="col-md">
                          <div class="form-floating">
                              <input type="date" name="tglcekout" class="form-control" id="floatingInputGrid">
                              <label for="floatingInputGrid">Check Out</label>
                          </div>
                      </div>
                      <div class="col-md">
                          <div class="form-floating">
                              <input type="number" name="jml_kmr" class="form-control" id="floatingInputGrid">
                              <label for="floatingInputGrid">Jumlah Kamar</label>
                          </div>
                      </div>
                      <div class="col-md">
                          <div class="form-floating">
                              <a class="btn  btn-lg" style="height:50px; padding-top:10px; left:500px; background-color: #fa9e96;" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                  Pesan
                              </a>
                          </div>
                      </div>

                  </div>
                  <br>
                  <div class="collapse geser" id="collapseExample">
                      <div class="card text-center" style="width: 720px;">
                          <div class="card-body">
                              <div class="row g-2 align-items-center" style="margin-left:150px;">
                                  <div class="col-3">
                                      <label for="inputPassword6" class="form-label margin1">Nama Pemesan</label>
                                  </div>
                                  <div class="col-md-5">
                                      <input type="text" name="nm_pemesan" class="form-control" aria-describedby="passwordHelpInline">
                                  </div>
                                  <div class="col-md-5">
                                  </div>
                              </div>
                              <br>
                              <div class="row g-2 align-items-center" style="margin-left:150px;">
                                  <div class="col-3">
                                      <label for="inputPassword6" class="form-label margin2">Email</label>
                                  </div>
                                  <div class="col-md-5">
                                      <input type="text" name="email" class="form-control" aria-describedby="passwordHelpInline">
                                  </div>
                              </div>
                              <br>
                              <div class="row g-2 align-items-center" style="margin-left:150px;">
                                  <div class="col-3">
                                      <label for="inputPassword6" class="form-label margin3">No Telepon</label>
                                  </div>
                                  <div class="col-md-5">
                                      <input type="text" name="notlp" class="form-control" aria-describedby="passwordHelpInline">
                                  </div>
                              </div>
                              <br>
                              <div class="row g-2 align-items-center" style="margin-left:150px;">
                                  <div class="col-3">
                                      <label for="inputPassword6" class="form-label margin4">Nama Tamu</label>
                                  </div>
                                  <div class="col-md-5">
                                      <input type="text" name="nm_tamu" class="form-control" aria-describedby="passwordHelpInline">
                                  </div>
                                  <div class="col-md-5">
                                  </div>
                              </div>

                              <br>
                              <div class="row g-2 align-items-center" style="margin-left:150px;">
                                  <div class="col-3">
                                      <label for="inputPassword6" class="form-label margin5">Tipe Kamar</label>
                                  </div>
                                  <div class="col-md-5">

                                      <select name="tipe_kmr" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                          <option selected class="form-select" aria-label="Disabled select example" disabled>- Pilih Salah Satu -</option>
                                          <option value="Superior">Superior Room</option>
                                          <option value="Deluxe">Deluxe Room</option>
                                          <option value="Premier">Premier Room</option>
                                      </select>
                                  </div>
                                  <div class="col-md-5">
                                  </div>
                              </div><br>
                              <button type="submit" class="btn btn-lg" style="background-color: #fa9e96;">Konfirmasi Pesanan</button>
                          </div>
                      </div>
                  </div>
              </form>
          </section>


          <div class="card">
              <div class="card-body" style="background-color: #fa9e96;">
                  <p class="fs-2">Rooms & Suites</p>
                  <p class="font-monospace">Strawberries Hotel stunning and exquisite interior design incorporates both traditional and modern features. </p>

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
                                  <p class="card-text-font-monospace">Kamar berukuran luas 32 m2
                                      Kamar mandi shower</p>

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
                                  <p class="card-text">Memiliki ukuran luas standar sekitar 40 meter persegi</p>
                                  <div class="d-flex justify-content-between align-items-center">


                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col">
                          <div class="card shadow-sm">
                              <img class="bd-placeholder-img card-img-top" src="{{ asset('img/premier.jpg') }}" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                              <title>Placeholder</title>
                              <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>

                              <div class="card-body">
                                  <p class="card-text">Premier Room</p>
                                  <p class="card-text">Memiliki ukuran 30 m2 dan kasur ukuran queen</p>
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
                  <div class="card-body" style="background-color: #fa9e96;">
                      <p class="fs-2">Hotel Facilities</p>
                      <p class="font-monospace"> </p>
                  </div>
              </div>
              <br>
              <p class="fs-6 text-center">Enjoy Our Facilities</p>
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
                  <div class="card-body" style="background-color: #fa9e96;">
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

      <footer class="text-muted py-5" style="background-color: #fa9e96;">
          <div class="container" style="background-color: #fa9e96;">
              <p class="float-end mb-1">
                  <a href="#">Back to top</a>
              </p>
              <p class="mb-1">Copyright © 2022 DELILA S R. All rights reserved.</p>
          </div>
      </footer>


      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>


  </body>
  </html>
