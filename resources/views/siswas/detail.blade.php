@extends('./templates.frame')
@section('title','DETAIL SISWA')

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
	 <strong>Detail Siswa {{$siswa->nmsiswa}}</strong>	
</div>
<div style="width: 500px;">
<table class="table table-striped">
	<tr>
		<td>Nis</td>
		<td>:</td>
		<td>{{$siswa->nis}}</td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>{{$siswa->nmsiswa}}</td>
	</tr>
	<tr>
		<td>Agama</td>
		<td>:</td>
		<td>{{$siswa->agama}}</td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td>{{$siswa->kelas}}</td>
	</tr>
</table>
</div>
</center>
@endsection