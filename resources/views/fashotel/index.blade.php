@extends('fashotel.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Fasilitas Hotel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('fashotel.create') }}"> Input Data</a>
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
            <th>Nama Fasilitas Hotel</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($fasilitashotel as $i => $fas)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $fas->nm_fashotel }}</td>
            <td>{{ $fas->keterangan }}</td>
            <td>
                <form action="{{ route('fashotel.destroy', $fas->id_fashotel) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('fashotel.show',$fas->id_fashotel) }}">Tampil</a>
    
                    <a class="btn btn-primary" href="{{ route('fashotel.edit',$fas->id_fashotel) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $fasilitashotel->links() !!}
      
@endsection