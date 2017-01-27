@extends('./templates.frame')
@section('title','TAMBAH SISWA')

@section('css')
<style type="text/css">
	body{
		padding: 5px;
	}
</style>
<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('head')
<div style="border:border-radius: 5px;padding: 5px;font-size: 25px;color: grey;font-family: Adobe Heiti Std;">
	 <strong>TAMBAH MAPEL</strong>	
</div>
@endsection
@section('nav')
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">school-LAH</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/"><span class="glyphicon glyphicon-home"> Home</a></li>
    </ul>
  </div>
</nav>
@endsection
@section('content')
<br>
<div style="text-align: center; border:border-radius: 5px;padding: 5px;font-size: 25px;color: grey;font-family: Adobe Heiti Std; width: 500px">
	 <strong>Tambah Siswa</strong>	
</div>
<div style="width: 500px;">
<form role="form" action="{{url('/mapel/create')}}" method="post" accept-charset="utf-8">
<table class="table">
<tr>
	<td>Kode Mapel</td>
	<td>:</td>
	<td><input type="text" name="kdmapel" class="form-control" placeholder="Masukan Kode Mapel"></td>
	<td>
		@if($errors->has('nis'))
			<span style="color: red">*NIS Harus Diisi</span>
		@endif
	</td>
</tr>
<tr>
	<td>Nama Mapel</td>
	<td>:</td>
	<td><input type="text" name="nmmapel" class="form-control" placeholder="Masukan Nama"></td>
</tr>
<tr>
	<td>KKm</td>
	<td>:</td>
	<td> <select name="kkm" class="form-control">
			<option>70</option>
			<option>75</option>
			<option>60</option>
			<option>65</option>
		 </select> 
	</td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="submit" class="btn btn-primary btn-block" value="Tambah"></td>
</tr>
</table>
{{csrf_field()}}
</form>
</div>
@endsection