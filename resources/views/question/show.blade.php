@extends('templates/master')
@section('content')
<div class="m-2">
    <div class="card">
        <div class="card-header">
            <h3>
                {{$question->judul}}
                <a href="/pertanyaan/{{$question->id}}/edit" class="btn btn-primary float-right">Edit</a>
            </h3>
        </div>
        <div class="card-body">
            {{$question->isi}}
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3>Jawaban</h3>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                Dummy ans
                <span class="float-right">
                    <a href="#" class="badge badge-success">Vote up</a>
                    <a href="#" class="badge badge-danger">Vote down</a>
                    <a href="#" class="badge badge-success">Update</a>
                    <a href="#" class="badge badge-danger">Delete</a>
                </span>
            </li>
            <li class="list-group-item">
                Dummy ans 2
                <span class="float-right">
                    <a href="#" class="badge badge-success">Vote up</a>
                    <a href="#" class="badge badge-danger">Vote down</a>
                    <a href="#" class="badge badge-success">Update</a>
                    <a href="#" class="badge badge-danger">Delete</a>
                </span>
            </li>
            <li class="list-group-item">
                Dummy ans 3
                <span class="float-right">
                    <a href="#" class="badge badge-success">Vote up</a>
                    <a href="#" class="badge badge-danger">Vote down</a>
                    <a href="#" class="badge badge-success">Update</a>
                    <a href="#" class="badge badge-danger">Delete</a>
                </span>
            </li>
        </ul>
    </div>
</div>
@endsection