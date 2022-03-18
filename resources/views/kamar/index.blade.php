@extends('kamar.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Kamar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kamar.create') }}"> Input Data</a>
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
            <th>Jumlah Kamar</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kamar as $i => $kam)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $kam->fas_kamar }}</td>
            <td>{{ $kam->tipe_kamar }}</td>
            <td>{{ $kam->jml_kamar }}</td>
            <td>
                <form action="{{ route('kamar.destroy', $kam->id_kamar) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('kamar.show',$kam->id_kamar) }}">Tampil</a>
    
                    <a class="btn btn-primary" href="{{ route('kamar.edit',$kam->id_kamar) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $kamar->links() !!}
      
@endsection