@extends('layouts.master')

@section('content')
<div class="ml-3">
    <form action="/artikel" method="POST">
     @csrf
      <div class="form-group">
        <label for="judul">Judul :</label>
        <input type="text" class="form-control" placeholder="Masukkan Judul" name="judul" id="judul">
      </div>
      <div class="form-group">
        <label for="isi">Isi :</label>
        <input type="text" class="form-control" placeholder="Masukkan Isi" name="isi" id="isi">
      </div>
      <div class="form-group">
        <label for="Tag">Tag :</label>
        <input type="text" class="form-control" placeholder="Masukkan Tag" name="Tag" id="Tag">
      </div>
      <button type="submit" class="btn btn-primary">Posting Artikel Saya</button>
    </form>
</div>
@endsection