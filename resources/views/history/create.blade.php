@extends('layout.main')
@section('title', 'YOUR HISTORY')
@section('content')


<div class="container">
<div class="jumbotron">
<center><h2><font size="6"> Hallo Create Your History</font></h2></center
<hr class="my-3">
<form action="/history" method="POST">

@csrf


<div class="form-group">
<label for="nama">Id</label>
<input type="text" class="form-control" id="nama"
                    name="id" placeholder="Silahkan Isi Disini..."
                    value="">
</div>
<div class="form-group">
<label for="asal_sd">Asal Sd</label>
<input type="text" class="form-control" id="asal_sd"
                    name="asal_sd" placeholder="Silahkan Isi Disini..."
                    value="">
</div>


<div class="form-group">
<label for="asal_smp">Asal Smp</label>
<input type="text" class="form-control" id="asal_smp"
                    name="asal_smp" placeholder="Silahkan Isi Disini...."
                    value="">
                    </div>

<div class="form-group">
<label for="asal_smk">Asal Smk</label>
<input type="text" class="form-control" id="asal_smk"
                    name="asal_smk" placeholder="Silahkan Isi Disini...."
                    value="">

                    </div>

<div class="form-group">
<label for="asal_univ">Asal Universitas</label>
<input type="text" class="form-control" id="asal_univ"
                    name="asal_univ" placeholder="Silahkan Isi Disini...."
                    value="">

</select>
</div>
<button type="submit" class="btn btn-primary">Kirim</button>
</form>
</div>
</div>

@endsection