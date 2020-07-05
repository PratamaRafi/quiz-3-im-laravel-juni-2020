@extends('layouts.master')

@section('content')
<div class="ml-3">
    <form action="/artikel/{{$articles->id}}" method="POST">
     @csrf
     @method('PUT')
     <div>
      <div class="form-group">
        <label for="judul">Edit Judul :</label>
        <input type="text" class="form-control" placeholder="Masukkan Judul" value="{{$articles->judul}}" name="judul" id="judul">
      </div>
      <div class="form-group">
        <label for="isi">Edit Isiisi :</label>
        <input type="text" class="form-control" placeholder="Masukkan Isi" value="{{$articles->isi}}" name="isi" id="isi">
      </div>
      <div class="form-group">
        <label for="slug">Edit slug :</label>
        <input type="text" class="form-control" placeholder="Masukkan Slug" value="{{$articles->slug}}" name="slug" id="slug">
      </div>
      <div class="form-group">
        <label for="tag">Edit tag :</label>
        <input type="text" class="form-control" placeholder="Masukkan Tag" value="{{$articles->tag}}" name="tag" id="tag">
      </div>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection