@extends('layout.main')
@section('title', 'Laravel - ABOUT YOUR SELF')
@section('content')

<div class="container">
<div class="jumbotron">
@if(session('msg'))
<div class="alert alert-success alert-dismissible fade show mt-2"
                role="alert">
{{session('msg')}}
<button type="button" class="close" data-dismiss="alert"
                aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif

<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<h1 class="display-6">ABOUT YOUR SELF</h1>
<hr class="my-4">
<a href="tentang/create" class="btn btn-primary mb-1">
LIST YOUR SELF</a>

<table class="table">
<thead class="thead-">
<tr>
<tr bgcolor='#4285F4'  align='center'>
<th scope="col">#</th>
<th scope="col">id</th>
<th scope="col">Nama_Admin</th>
<th scope="col">Alamat</th>
<th scope="col">No_tlp</th>
<th scope="col">Email</th>
<th></th>

</tr>
</thead>
<tbody>
@foreach ($tentang as $ten)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $ten->id }}</td>
<td>{{ $ten->nama_admin }}</td>
<td>{{ $ten->alamat }}</td>
<td>{{ $ten->no_tlp }}</td>
<td>{{ $ten->email }}</td>
<td>

<a href="/tentang/{{$ten['alamat']}}/edit" class="card-link">Edit</a>
<a href="" class="card-link">Hapus</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</body>
</html>
@endsection