@extends('./templates.frame')
@section('title','SEKOLAH')

@section('css')
<style type="text/css">
	table,td{
		border: solid black 1px;
	}
	a.href{
		border: 1px solid green;
		border-radius: 3px;
	}
	body{
		padding: 5px;
	}
</style>
<link href="{{ url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('head')
<div style="text-align: right; border:border-radius: 5px;padding: 5px;font-size: 25px;color: grey;font-family: Adobe Heiti Std;">
	 <strong>SEKOLAH COBA-COBA</strong>	
</div>
@endsection
@section('nav')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">school-LAH</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/">Home</a></li>
      <li><a href="/siswa">Data Siswa</a></li>
      <li><a href="/mapel">Data Mata Pelajaran</a></li>
      <li><a href="/cari">Cari Data</a></li>
    </ul>
  </div>
</nav>
@endsection
@section('content')
<div style="text-align: center">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<strong style="font-size: 40px;color: grey;">SELAMAT DATANG DI SEKOLAH</strong><br>
<strong style="font-size: 40px;color: grey;">COBA-COBA</strong>
</div>
@endsection