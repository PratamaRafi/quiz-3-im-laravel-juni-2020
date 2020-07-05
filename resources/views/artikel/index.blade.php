@extends('layouts.master')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Slug</th>
        <th>Tags</th>
      </tr>
    </thead>
    <tbody>
    @foreach($articles as $key => $articles)
      <tr>
        <td> {{ $key + 1 }} </td>
        <td> {{ $articles->judul }} </td>
        <td> {{ $articles->isi }} </td>
        <td> {{ $articles->slug }} </td>
        <td> {{ $articles->tag }} </td>
        <td>
        <a href="/artikel/{{$articles->id}}" class="btn btn-sm btn-info">Detail <i class="fa fa-list" aria-hidden="true"></i> </a>
        <form action="/artikel/{{$articles->id}}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Hapus <i class="fas fa-trash"></i> </button>
        </td>
      </tr>
     @endforeach
    </tbody>
  </table>
  <div class="ml-3">
  <a class="btn btn-primary" href="/artikel/create" role="button">+ Artikel Baru</a>
  </div>
  
  @push('scripts')
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
      swal({
          title: 'Berhasil!',
          text: 'Memasangkan script sweet alert',
          icon: 'success',
          confirmButtonText: 'Cool'
      })
  </script>
  @endpush
  
@endsection
