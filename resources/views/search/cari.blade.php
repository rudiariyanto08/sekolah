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
	 <strong>HALAMAN PENCARIAN</strong>	
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
<div style="width: 900px;">
			<form action="{{url('/hasil')}}" action="GET">
				<div class="form-group" style="width: 200px">
					<label for="cari">Data yang dicari</label>
					<input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
				</div>
				<input class="btn btn-primary" type="submit" value="cari">
			</form>
</div>

@endsection