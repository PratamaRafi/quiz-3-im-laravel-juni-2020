@extends('layouts.master')

@section('content')
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Judul Artikel : {{ $articles->judul }} </h5>
    <p class="card-text">slug : {{ $articles->slug }}</p>
    <p class="card-text">{{ $articles->isi }}</p>
    <a href="#" class="btn btn-primary"> {{ $articles->tag}} </a>
    <a href="/artikel/{{$articles->id}}/edit" class="btn btn-dark">Edit <i class="fa fa-edit" aria-hidden="true"></i> </a>
  </div>
</div>
@endsection