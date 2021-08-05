@extends('layout.main')
@section('title', 'YOUR STUDENT')
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
<h1><font size="7" color="black" >LIST STUDY</font></h1>
<a href="pengalaman/create" class="btn btn-primary mb-1">
ADD LIST STUDY</a> </br>


<table class="table">
<tr>
<tr bgcolor='#4285F4'  align='center'>
<th scope="col">ID</th>
<th scope="col">Nama Lengkap</th>
<th scope="col">Tempat Tanggl Lahir</th>
<th scope="col">Tentang Saya</th>
<th></th>


</tr>
</thead>
<tbody>
@foreach ($pengalaman as $peng)
<tr>

<td>{{ $peng->id }}</td>
<td>{{ $peng->nama_lengkap }}</td>
<td>{{ $peng->ttl }}</td>
<td>{{ $peng->tentang_saya }}</td>

</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection
