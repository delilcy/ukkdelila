@extends('faskamar.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Fasilitas Kamar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('faskamar.create') }}"> Input Data</a>
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
            <th>Nama Fasilitas Kamar</th>
            <th>Tipe Kamar</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($fasilitaskmr as $i => $fas)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $fas->nm_faskmr }}</td>
            <td>{{ $fas->tipekamar }}</td>
            <td>
                <form action="{{ route('faskamar.destroy', $fas->id_faskmr) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('faskamar.show',$fas->id_faskmr) }}">Tampil</a>
    
                    <a class="btn btn-primary" href="{{ route('faskamar.edit',$fas->id_faskmr) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $fasilitaskmr->links() !!}
      
@endsection