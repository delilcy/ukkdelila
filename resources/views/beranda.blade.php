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
      <nav class="navbar navbar-expand-lg fixed-top  navbar-light justify-content-center" style="background-color: #d5e386;">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top:5px;">
              <ul class="navbar-nav justify-content-center mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link fs-5" href="#">
                          <img src="{{ asset('img/strawberries-removebg-preview (1).png') }}" width="40" height="40" class="d-inline-block align-top" alt="" style="margin-top:-8px;">
                          Strawberries Hotel<span class="sr-only-bold">

                          </span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link fs-5" href="{{route('beranda')}}">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link fs-5" href="{{route('pesanan')}}">Order</a>
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
          .geser {
              margin-left: 150px;
              text-align: left;
          }

          .geser1,
          .geser2,
          .geser3,
          .geser4,
          .geser5,
          .geser6 {

              text-align: left;
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
                              <input type="date" name="tglcekin" class="form-control border border-warning border-2" id="tglcekin" required>
                              <label for="floatingInputGrid geser">Check In</label>
                          </div>
                      </div>
                      <div class="col-md">
                          <div class="form-floating">
                              <input type="date" name="tglcekout" class="form-control border border-warning border-2" id="tglcekout" required>
                              <label for="floatingInputGrid">Check Out</label>
                          </div>
                      </div>
                      <div class="col-md">
                          <div class="form-floating">
                              <input type="number" name="jml_kmr" class="form-control border border-warning border-2" id="jml_kmr" required>
                              <label for="floatingInputGrid">Room</label>
                          </div>
                      </div>
                      <div class="col-md">
                          <div class="form-floating">
                              <a class="btn text-white btn-lg" id="book" style="height:56px; padding-top:10px; left:500px; background-color: #FF4550;" onclick="isEmpty()">
                                  Book Now
                              </a>
                          </div>
                      </div>

                  </div>
                  <br>
                  <div class="collapse geser" id="collapseExample">
                      <div class="card border text-center" style="width: 870px;">
                          <div class="card-body" style="background-color: #fceeac;">
                              <div class="row g-2 align-items-center" style="margin-left:150px;">
                                  <div class="col-3 text-start">
                                      <label for="inputPassword6" class="form-label geser1">Customer</label>
                                  </div>
                                  <div class="col-md-5">
                                      <input type="text" name="nm_pemesan" class="form-control" aria-describedby="passwordHelpInline" placeholder="name" required>
                                  </div>
                                  <div class="col-md-5">
                                  </div>
                              </div>
                              <br>
                              <div class="row g-2 align-items-center" style="margin-left:150px;">
                                  <div class="col-3 text-start">
                                      <label for="inputPassword6" class="form-label geser2">Email Address</label>
                                  </div>
                                  <div class="col-md-5">
                                      <input type="text" name="email" class="form-control" aria-describedby="passwordHelpInline" placeholder="@gmail.com">
                                  </div>
                              </div>
                              <br>
                              <div class="row g-2 align-items-center" style="margin-left:150px;">
                                  <div class="col-3 text-start">
                                      <label for="inputPassword6" class="form-label geser3">Mobile Number</label>
                                  </div>
                                  <div class="col-md-5">
                                      <input type="text" name="notlp" class="form-control" aria-describedby="passwordHelpInline" placeholder="ex. 0823XXX">
                                  </div>
                              </div>
                              <br>
                              <div class="row g-2 align-items-center" style="margin-left:150px;">
                                  <div class="col-3 text-start">
                                      <label for="inputPassword6" class="form-label geser4">Guest</label>
                                  </div>
                                  <div class="col-md-5">
                                      <input type="text" name="nm_tamu" class="form-control" aria-describedby="passwordHelpInline" placeholder="name">
                                  </div>
                                  <div class="col-md-5">
                                  </div>
                              </div>

                              <br>
                              <div class="row g-2 align-items-center" style="margin-left:150px;">
                                  <div class="col-3 text-start">
                                      <label for="inputPassword6" class="form-label margin5">Room Type</label>
                                  </div>
                                  <div class="col-md-5">

                                      <select name="tipe_kmr" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                          <option selected class="form-select" aria-label="Disabled select example" disabled>select one</option>
                                          <option value="Superior" @if($superior <= 0) disabled @endif>Superior Room -- Room Available = {{ $superior }} --</option>
                                          <option value="Deluxe" @if($deluxe <= 0) disabled @endif>Deluxe Room -- Room Available = {{ $deluxe }} --</option>
                                          <option value="Presidential Suite" @if($suite <= 0) disabled @endif>Suite Room -- Room Available = {{ $suite }} --</option>
                                      </select>
                                  </div>
                                  <div class="col-md-5">
                                  </div>
                              </div><br>
                              <button type="submit" class="btn text-white btn-lg" style="background-color: #FF4550; font-size:14pt;">CONFIRM RESERVATION</button>
                          </div>
                      </div>
                  </div>
              </form>
          </section>


          <div class="card">
              <div class="card-body" style="background-color: #d5e386;">
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
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <script>
    $("#book").click(function(){
  
        
            
        
});
       function isEmpty() {
           if (document.getElementById('jml_kmr').value.length > 0) {
                if (document.getElementById('tglcekin').value.length > 0) {
                    if (document.getElementById('tglcekout').value.length > 0) {
                        $('#collapseExample').collapse('show');
                    }
                }
            }
       }
    </script>

  </body>
  </html>
