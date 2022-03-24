@extends('reservasi.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <br>
            <br>
            <br>
                <h2>Reservasi</h2>
            </div>
            <div class="pull-right">
                
            </div>
        </div>
    </div>
    <br>
    
    <!-- <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
  </div>
<!-- </div> -->
<div class="row">
<div class="col-md-12">
<div class="row">
<form action="{{ route('search') }}" method="POST">
    @csrf
    <div class="col-sm-3">
    <input type="text"name="nm_tamu" class="form-control" placeholder="Search.." aria-label="Recipient's username" aria-describedby="button-addon2">
    </div>
    <div class="col-sm-1">
    <button class="btn btn-danger" type="submit" id="button-addon2">Search</button>
    </div>
    <div class="col-sm-2">
    <a class="btn btn-warning" href="{{ route('reservasi.index')}}">semua</a>
    </div>
  </form>
  </div>
</div>
<div class="col-md-2">
  <div class="row">
  <form action="{{ route('reservasi.filter') }}" style="position:fixed; left:750px; top:137px;" method="POST">
    @csrf
    <div class="col-sm-3">
    <input class="form-control" type="date" name="tglcekin" id="button-addon2" style="height:40px">
    </div>
    <div class="col-sm-2">
    <button class="btn btn-warning" type="submit">cari</button>
    </div>
    </form>
  </div>
</div>
</div>
<br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Pemesan</th>
            <th>Nama Tamu</th>
            <th>Tanggal Check-in</th>
            <th>Tanggal Check-out</th>
            <th>Tipe Kamar</th>
            <th>Jumlah Kamar</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($reservasi as $i => $res)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $res->nm_pemesan}}</td>
            <td>{{ $res->nm_tamu }}</td>
            <td>{{ $res->tglcekin }}</td>
            <td>{{ $res->tglcekout }}</td>
            <td>{{ $res->tipe_kmr}}</td>
            <td>{{ $res->jml_kmr}}</td>
            <td>
                <form action="{{ route('reservasi.destroy', $res->id_reservasi) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('reservasi.show',$res->id_reservasi) }}">Tampil</a>
    
    
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $reservasi->links() !!}
      
@endsection