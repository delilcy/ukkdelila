@extends('kamar.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tampilkan Data Kamar </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kamar.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Fasilitas Kamar:</strong>
                {{ $kamar->fas_kamar }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipe Kamar:</strong>
                {{ $kamar->tipe_kamar }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Kamar:</strong>
                {{ $kamar->jml_kamar }}
            </div>
        </div>
    </div>
@endsection