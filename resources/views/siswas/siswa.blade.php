@extends('./templates.frame')
@section('title','SISWA')

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
	 <strong>HALAMAN DATA SISWA</strong>	
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
@if(Session::has('massage'))
	<span class="label label-success">{{ Session::get('massage') }}</span>
@endif

<a href="/siswa/create" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> TAMBAH </a>
<br><br>
<div style="width: 900px;">
<table class="table table-striped table-bordered">
	<thead>
		<th width="20px">No</th>
		<th width="100px">NIS</th>
		<th width="397px">Nama</th>
		<th width="20px">Agama</th>
		<th width="20px">Kelas</th>
		<th colspan="3"><center>AKSI</center></th>
	</thead>
	<?php $no = $siswa->firstItem() - 1 ; ?>
	@foreach($siswa as $s)
	<?php $no++; ?>
	<tbody>
		<tr>
			<td>{{ $no }}</td>
			<td>{{$s->nis}}</td>
			<td>{{$s->nmsiswa}}</td>
			<td>{{$s->agama}}</td>
			<td>{{$s->kelas}}</td>
			<td> 
				<form action="/siswa/delete/{{$s->id}}" method="post" accept-charset="utf-8">
				<a href="{{url('/siswa/detail/'.$s->id.'')}}" class="btn btn-primary btn-sm">DETAIL</a> | 
				<a href="{{url('/siswa/edit/'.$s->id.'')}}" class="btn btn-success btn-sm">EDIT</a> |
					<input type="submit" name="submit" value="DELETE" onclick="return confirm('Anda yakin akan menghapus data ?');" class="btn btn-danger btn-sm">
					<input type="hidden" name="_method" value="DELETE">
					{{csrf_field()}}
				</form>
			</td>
		</tr>
	</tbody>
	@endforeach
</table>
<?php echo str_replace('/?', '?', $siswa->render()); ?>
</div>

@endsection