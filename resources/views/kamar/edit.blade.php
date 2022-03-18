@extends('kamar.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data Kamar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kamar.index') }}"> Kembali</a>
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
  
    <form action="{{ route('kamar.update', $kamar[0]->id_kamar) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Fasilitas Kamar:</strong>
                    <input type="text" name="fas_kamar" value="{{ $kamar[0]->fas_kamar }}" class="form-control" placeholder="nama">
                </div>
            </div>
            <!-- <input type="hidden" name="id_kamar" value="{{ $kamar[0]->id_kamar }}"> -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipe Kamar:</strong>
                    <input type="text" class="form-control" name="tipe_kamar" placeholder="tipe kamar" value="{{ $kamar[0]->tipe_kamar }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Kamar:</strong>
                    <input type="number" class="form-control"name="jml_kamar" placeholder="jumlah kamar" value="{{ $kamar[0]->jml_kamar }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">EDIT</button>
            </div>
        </div>
   
    </form>
@endsection