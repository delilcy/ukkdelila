@extends('faskamar.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tampilkan Fasilitas Kamar </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('faskamar.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Fasilitas Kamar:</strong>
                {{ $fasilitaskmr->nm_faskmr }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipe Kamar:</strong>
                {{ $fasilitaskmr->tipekamar }}
            </div>
        </div>
    </div>
@endsection