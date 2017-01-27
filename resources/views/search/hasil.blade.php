		@if (count($data) > 0)
			@foreach ($data as $siswa)
				{{ $siswa->nis }} => {{ $siswa->nmsiswa }} <br>
			@endforeach
		@else 
		Data tidak ditemukan.
		@endif