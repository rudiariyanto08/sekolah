@extends('./templates.frame')
@section('title','EDIT SISWA')

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
	 <strong>DETAIL SISWA</strong>	
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
      <li><a href="/siswa"><span class="glyphicon glyphicon-user"> Siswa</a></li>
    </ul>
  </div>
</nav>
@endsection
@section('content')
<br>
<center>
<div style="border:border-radius: 5px;padding: 5px;font-size: 25px;color: grey;font-family: Adobe Heiti Std;">
	 <strong>Edit Siswa</strong>	
</div>
<div style="width: 500px;">
<form role="form" action="{{url('/mapel/update/'.$mapel->id.'')}}" method="post" accept-charset="utf-8">
{{ method_field('PUT') }}
<table class="table table-striped">
	<tr>
		<td>Kode Mapel</td>
		<td>:</td>
		<td><input type="text" name="kdmapel" value="{{$mapel->kdmapel}}" class="form-control"></td>
	</tr>
	<tr>
		<td>Nama Mapel</td>
		<td>:</td>
		<td><input type="text" name="nmmapel" value="{{$mapel->nmmapel}}" class="form-control"></td>
	</tr>
	<tr>
		<td>KKM</td>
		<td>:</td>
		<td><input type="text" name="kkm" value="{{$mapel->kkm}}" class="form-control"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td colspan="2"><input type="submit" value="Update" class="btn btn-primary btn-block" ></td>
	</tr>
</table>
{{ csrf_field() }}
</form>
</div>
</center>
@endsection