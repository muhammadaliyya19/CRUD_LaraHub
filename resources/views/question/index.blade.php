@extends('templates/master')
@section('content')
<div class="row m-3">
    <h1>All Question</h1>
</div>
<div class="card m-3">
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
                <td class="text-center"><a href="#"><i class="fas fa-eye mr-1"></i></a></td>
                <td class="text-center"><a href="#"><i class="fas fa-edit mr-1"></i></a> <a href="#" class="ml-2"><i class="fas fa-trash mr-1"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection