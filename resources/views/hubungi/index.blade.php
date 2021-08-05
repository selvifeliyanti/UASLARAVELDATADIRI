@extends('layout.main')
@section('title', 'YOUR CONTAC US')
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
<h1><font size="7" color="black" >CONTAC US</font></h1>
<a href="hubungan/create" class="btn btn-primary mb-1">
ADD LIST CONTAC US</a> </br>


<table class="table">
<tr>
<tr bgcolor='#4285F4'  align='center'>
<th scope="col">ID</th>
<th scope="col">Nomor Telvon</th>
<th scope="col">Email</th>
<th scope="col">Instagram</th>
<th scope="col">Facebook</th>
<th></th>


</tr>
</thead>
<tbody>
@foreach ($hubungi as $hub)
<tr>

<td>{{ $hub->id }}</td>
<td>{{ $hub->nama_tlp }}</td>
<td>{{ $hub->email }}</td>
<td>{{ $hub->ig }}</td>
<td>{{ $hub->fb }}</td>

</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection
