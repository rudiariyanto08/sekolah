@extends('./templates.frame')
@section('title','DETAIL MAPEL')

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
	 <strong>DETAIL MAPELs</strong>	
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
	 <strong>Detail Siswa {{$mapel->nmmapel}}</strong>	
</div>
<div style="width: 500px;">
<table class="table table-striped">
	<tr>
		<td>Kode Mapel</td>
		<td>:</td>
		<td>{{$mapel->kdmapel}}</td>
	</tr>
	<tr>
		<td>Nama Mapel</td>
		<td>:</td>
		<td>{{$mapel->nmmapel}}</td>
	</tr>
	<tr>
		<td>KKM</td>
		<td>:</td>
		<td>{{$mapel->kkm}}</td>
	</tr>
</table>
</div>
</center>
@endsection