@extends('layout.main')
@section('title', 'YOUR STUDY')
@section('content')


<div class="container">
<div class="jumbotron">
<center><h2><font size="6"> Hallo Create Your STUDY</font></h2></center
<hr class="my-3">
<form action="/pengalaman" method="POST">

@csrf


<div class="form-group">
<label for="nama">Nama Lengkap</label>
<input type="text" class="form-control" id="nama"
                    name="id" placeholder="Silahkan Isi Disini..."
                    value="">
</div>
<div class="form-group">
<label for="ttl">Tempat Tanggal Lahir</label>
<input type="text" class="form-control" id="ttl"
                    name="ttl" placeholder="Silahkan Isi Disini..."
                    value="">
</div>


<div class="form-group">
<label for="tentang_saya">Tentang Saya</label>
<input type="text" class="form-control" id="tentang_saya"
                    name="tentang_saya" placeholder="Silahkan Isi Disini...."
                    value="">
                    </div>

</select>
</div>
<button type="submit" class="btn btn-primary">Kirim</button>
</form>
</div>
</div>

@endsection