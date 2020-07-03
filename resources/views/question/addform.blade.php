<?php
date_default_timezone_set("Asia/Jakarta");
$now = new DateTime();
?>
@extends('templates/master')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{url('/pertanyaan/create')}}" method="post">
            @csrf
            <input type="hidden" name="tanggal_dibuat" value="<?php echo $now->format('Y-m-d H:i:s'); ?>">
            <input type="hidden" name="tanggal_diperbarui" value="<?php echo $now->format('Y-m-d H:i:s'); ?>">
            <div class="form-group">
                <label for="formGroupExampleInput">Judul Pertanyaan</label>
                <input type="text" class="form-control" id="judul" placeholder="Judul pertanyaan" name="judul">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Isi Pertanyaan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Isi pertanyaan" name="isi"></textarea>
            </div>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
        </form>
    </div>
</div>
@endsection