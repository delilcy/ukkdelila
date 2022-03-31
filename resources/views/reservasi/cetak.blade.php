<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
        .margin1 {
            /* margin-right: 10px; */
            text-align: left;
        }

        .geser {
            margin-left: 180px;
        }

        html {
            -webkit-print-color-adjust: exact; 
        }

    </style>

    <title>Bukti Reservasi</title>
</head>
<body>
    <div class="container p-5">
        <div class="card text-center" style="max-width: 70rem; ">
            <div class="card-header" style="background-color: #ff5457;">
                <h2 style="background-color: #ff5457;">Bukti Reservasi</h2>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label margin1">Nama Pemesan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" value="{{ $cetak[0]->nm_pemesan}}" disabled>
                    </div>
                    <br>
                    <br>
                    <label for="inputPassword" class="col-sm-2 col-form-label margin1">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" value="{{ $cetak[0]->email}}" disabled>
                    </div>
                    <br>
                    <br>
                    <label for="inputPassword" class="col-sm-2 col-form-label margin1">No. Telepon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" value="{{$cetak[0]->notlp}}" disabled>
                    </div>
                    <br>
                    <br>
                    <label for="inputPassword" class="col-sm-2 col-form-label margin1">Nama Tamu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" value="{{$cetak[0]->nm_tamu}}" disabled>
                    </div>
                    <br>
                    <br>
                    <label for="inputPassword" class="col-sm-2 col-form-label margin1">Tipe Kamar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" value="{{$cetak[0]->tipe_kmr}}" disabled>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="row g-3 geser">
                        <div class="col-md" style="margin-center">
                            <div class="form-floating">

                                <label for="floatingInputGrid">Check In</label>
                                <input type="text" name="tglcekin" class="form-control" id="floatingInputGrid" value="{{$cetak[0]->tglcekin}}" disabled>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <label for="floatingInputGrid">Check Out</label>
                                <input type="text" name="tglcekout" class="form-control" id="floatingInputGrid" value="{{$cetak[0]->tglcekout}}" disabled>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <label for="floatingInputGrid">Jumlah Kamar</label>
                                <input type="text" name="jml_kmr" class="form-control" id="floatingInputGrid" value="{{$cetak[0]->jml_kmr}}" disabled>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="card-footer text-muted" style="background-color: #ff5457;">

            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
    <script>
        var css = '@page { size: landscape; }'
            , head = document.head || document.getElementsByTagName('head')[0]
            , style = document.createElement('style');

        style.type = 'text/css';
        style.media = 'print';

        if (style.styleSheet) {
            style.styleSheet.cssText = css;
        } else {
            style.appendChild(document.createTextNode(css));
        }

        head.appendChild(style);

        window.print();

    </script>
</body>
</html>
