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
<form role="form" action="{{url('/siswa/update/'.$siswa->id.'')}}" method="post" accept-charset="utf-8">
{{ method_field('PUT') }}
<table class="table table-striped">
	<tr>
		<td>Nis</td>
		<td>:</td>
		<td><input type="text" name="nis" value="{{$siswa->nis}}" class="form-control"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nmsiswa" value="{{$siswa->nmsiswa}}" class="form-control"></td>
	</tr>
	<tr>
		<td>Agama</td>
		<td>:</td>
		<td><input type="text" name="agama" value="{{$siswa->agama}}" class="form-control"></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><input type="text" name="kelas" value="{{$siswa->kelas}}" class="form-control"></td>
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