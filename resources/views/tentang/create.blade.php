@extends('layout.main')
@section('title', 'Laravel - ABOUT YOUR SELF')
@section('content')

<div class="container">
<div class="jumbotron">
<h1 class="display-6">ADD ABOUT YOUR SELF</h1>
<hr class="my-4">
<form action="/tentang" method="POST">

@csrf

<div class="form-group">
<label for="id">Id</label>
<input type="text" class="form-control" id="Id"
                    name="Id" placeholder="Id"
                    value="{{ old('Id') }}">
</div>

<div class="form-group">
<label for="nama_admin">Nama Admin</label>
<input type="text" class="form-control" id="nama_admin"
                    name="nama_admin" placeholder="nama_admin"
                    value="{{ old('nama_admin') }}">
</div>

<div class="form-group">
<label for="alamat">Alamat</label>
<input type="text" class="form-control" id="alamat"
                    name="alamat" placeholder="alamat"
                    value="{{ old('alamat') }}">

</div>
<div class="form-group">
<label for="no_tlp">No. HP</label>
<input type="text" class="form-control" id="no_tlp"
                    name="no_tlp" placeholder="no_tlp"
                    value="{{ old('no_tlp') }}">
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" id="email"
                    name="email" aria-describedby="emailHelp"
                    placeholder="Enter email" value="{{ old('email') }}">
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>
@endsection