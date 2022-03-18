@extends('faskamar.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data Fasilitas Kamar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('faskamar.index') }}"> Kembali</a>
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
  
    <form action="{{ route('faskamar.update', $fasilitaskmr[0]->id_faskmr) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Fasilitas Kamar:</strong>
                    <input type="text" name="nm_faskmr" value="{{ $fasilitaskmr[0]->nm_faskmr }}" class="form-control" placeholder="nama">
                </div>
            </div>
            <input type="hidden" name="id_faskmr" value="{{ $fasilitaskmr[0]->id_faskmr }}">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipe Kamar:</strong>
                    <textarea class="form-control" style="height:150px" name="tipekamar" placeholder="tipe kamar">{{ $fasilitaskmr[0]->tipekamar }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">EDIT</button>
            </div>
        </div>
   
    </form>
@endsection