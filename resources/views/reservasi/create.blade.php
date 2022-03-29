@extends('reservasi.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Data Reservasi</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('reservasi.index') }}"> Kembali</a>
        </div>
    </div>
</div>

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

<form action="{{ route('reservasi.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pemesan:</strong>
                <input type="text" name="nm_pemesan" class="form-control" placeholder="nama pemesan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Tamu:</strong>
                <textarea class="form-control" style="height:150px" name="nm_tamu" placeholder="nama tamu"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Check-in:</strong>
                <textarea class="form-control" style="height:150px" name="tglcekin" placeholder="tanggal check-in"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Check-out:</strong>
                <textarea class="form-control" style="height:150px" name="tglcekout" placeholder="tanggal check-out"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipe Kamar:</strong>
                <textarea class="form-control" style="height:150px" name="tipe_kmr" placeholder="tipe kamar"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Kamar:</strong>
                <textarea class="form-control" style="height:150px" name="jml_kmr"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>

</form>
@endsection
