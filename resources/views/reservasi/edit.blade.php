@extends('reservasi.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data Reservasi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('reservasi.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Edit Gagal</strong> Maaf ada kesalahan saat input data<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('reservasi.update', $reservasi[0]->id_reservasi) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Pemesan:</strong>
                    <input type="text" name="nm_pemesan" value="{{ $reservasi[0]->nm_pemesan }}" class="form-control" placeholder="nama">
                </div>
            </div>
            <!-- <input type="hidden" name="id_kamar" value="{{ $kamar[0]->id_kamar }}"> -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Tamu:</strong>
                    <input type="text" class="form-control" name="nm_tamu" placeholder="nama tamu" value="{{ $reservasi[0]->nm_tamu }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Check-in:</strong>
                    <input type="date" class="form-control"name="tglcekin" placeholder="tangga check-in" value="{{ $reservasi[0]->tglcekin }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Check-out:</strong>
                    <input type="date" class="form-control" name="tglcekout" placeholder="tangga check-out" value="{{ $reservasi[0]->tglcekout }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipe Kamar:</strong>
                    <input type="text" class="form-control" name="tipe_kmr" placeholder="tipe kamar" value="{{ $reservasi[0]->tipe_kmr }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Kamar:</strong>
                    <input type="number" class="form-control" name="jml_kmr" value="{{ $reservasi[0]->jml_kmr }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">EDIT</button>
            </div>
        </div>
   
    </form>
@endsection