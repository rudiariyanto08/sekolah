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
	 <strong>TAMBAH SISWA</strong>	
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
<form role="form" action="{{url('/siswa/create')}}" method="post" accept-charset="utf-8">
<table class="table">
<tr>
	<td>NIS</td>
	<td>:</td>
	<td><input type="text" name="nis" class="form-control" placeholder="Masukan Nis"></td>
</tr>
<tr>
	<td>Nama</td>
	<td>:</td>
	<td><input type="text" name="nmsiswa" class="form-control" placeholder="Masukan Nama"></td>
</tr>
<tr>
	<td>Agama</td>
	<td>:</td>
	<td> <select name="agama" class="form-control">
			<option>Islam</option>
			<option>Budha</option>
			<option>Hindu</option>
			<option>Katolik</option>
			<option>Kristen</option>
			<option>Khonghucu</option>
		 </select> 
	</td>
</tr>
<tr>
	<td>Mapel</td>
	<td>:</td>
	<td>
		<select name="kdmapel" class="form-control">
		@foreach($mapel as $m)
			<option>{{ $m->kdmapel }}</option>
		@endforeach
		</select>
	</td>
</tr>
<tr>
	<td>Kelas</td>
	<td>:</td>
	<td>
		<select name="kelas" class="form-control">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
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