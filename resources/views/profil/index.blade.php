@extends('layout.main')
@section('title', 'YOUR PROFILE')
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
<h1><font size="7" color="black" >LIST PROFILE</font></h1>
<a href="profil/create" class="btn btn-primary mb-1">
ADD LIST PROFILE</a> </br>


<table class="table">
<tr>
<tr bgcolor='#4285F4'  align='center'>
<th scope="col">ID</th>
<th scope="col">Hobby</th>
<th scope="col">Cita-Cita</th>
<th scope="col">Visi Misi</th>
<th scope="col">Keterangan</th>
<th></th>


</tr>
</thead>
<tbody>
@foreach ($profil as $prof)
<tr>

<td>{{ $prof->id }}</td>
<td>{{ $prof->hobby }}</td>
<td>{{ $prof->cita_cita }}</td>
<td>{{ $prof->visi_misi }}</td>
<td>{{ $prof->keterangan }}</td>

</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
@endsection
