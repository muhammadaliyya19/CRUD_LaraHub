@extends('templates/master')
@section('content')
<div class="row m-2">
    <h1>All Question</h1>
</div>
<div class="card m-2">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Isi</th>
                <th scope="col">Tanggal Dibuat</th>
                <th scope="col">Tanggal Diupdate</th>
                <th scope="col">Jawaban</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($questions as $q)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$q->judul}}</td>
                <td>{{$q->isi}}</td>
                <td>{{$q->tanggal_dibuat}}</td>
                <td>{{$q->tanggal_diperbarui}}</td>
                <td class="text-center"><a href="{{url('/pertanyaan/'.$q->id)}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a></td>
                <td class="text-center">
                    <a href="{{url('/pertanyaan/'.$q->id.'/edit')}}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                    <form action="/pertanyaan/{{$q->id}}" method="post" style="display: inline;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection