@extends('./templates.frame')
@section('title','MAPEL')

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
	 <strong>HALAMAN DATA MAPEL</strong>	
</div>
@endsection
@section('nav')
<nav class="navbar navbar-default">
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
<a href="/mapel/create" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> TAMBAH </a>
<br><br>
<div style="width: 900px;">
<table class="table table-striped table-bordered">
	<thead>
		<th width="20px">No</th>
		<th width="100px">Kode Mapel</th>
		<th width="397px">Nama Mapel</th>
		<th width="20px">KKM</th>
		<th colspan="3"><center>AKSI</center></th>
	</thead>
	<?php $no=1; ?>
	@foreach($mapel as $m)
	<tbody>
	<tr>
		<td>{{$no++}}</td>
		<td>{{$m->kdmapel}}</td>
		<td>{{$m->nmmapel}}</td>
		<td>{{$m->kkm}}</td>
		<td>
				<form action="/mapel/delete/{{$m->id}}" method="post" accept-charset="utf-8">
				<a href="{{url('/mapel/detail/'.$m->id.'')}}" class="btn btn-primary btn-sm">DETAIL</a> | 
				<a href="{{url('/mapel/edit/'.$m->id.'')}}" class="btn btn-success btn-sm">EDIT</a> |
					<input type="submit" name="submit" value="DELETE" onclick="return confirm('Anda yakin akan menghapus data ?');" class="btn btn-danger btn-sm">
					<input type="hidden" name="_method" value="DELETE">
					{{csrf_field()}}
				</form>
		</td>
	</tr>
	</tbody>
	@endforeach
</table>
</div>

@endsection