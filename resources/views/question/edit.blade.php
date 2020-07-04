<?php
date_default_timezone_set("Asia/Jakarta");
$now = new DateTime();
?>
@extends('templates/master')
@section('content')
<div class="row m-2">
    <h1>Edit Question</h1>
</div>
<div class="card m-2">
    <div class="card-body">
        <form action="{{url('/pertanyaan/'.$question->id)}}" method="POST">
            @csrf
            @method('put')
            <input type="hidden" name="tanggal_dibuat" value="{{$question->tanggal_dibuat}}">
            <input type="hidden" name="tanggal_diperbarui" value="<?php echo $now->format('Y-m-d H:i:s'); ?>">
            <div class="form-group">
                <label for="formGroupExampleInput">Judul Pertanyaan</label>
                <input type="text" class="form-control" id="judul" placeholder="Judul pertanyaan" name="judul" value="{{$question->judul}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Isi Pertanyaan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Isi pertanyaan" name="isi">{{$question->isi}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary float-right">Update</button>
        </form>
    </div>
</div>
@endsection