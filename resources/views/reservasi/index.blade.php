@extends('reservasi.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Reservasi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('reservasi.create') }}"> Input Data</a>
            </div>
        </div>
    </div>
   
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
            <th>Tipe Kamar/th>
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
    
                    <a class="btn btn-primary" href="{{ route('reservasi.edit',$res->id_reservasi) }}">Edit</a>
   
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