@extends('template')

@section('content')
	<h3>Data Penggaris</h3>

	<a href="/penggaris/tambahpenggaris" class="btn btn-primary"> + Tambah Penggaris Baru</a>

	<p>Cari Data Penggaris :</p>
	<form action="/penggaris/caripenggaris" method="GET">
		<input type="text" class="form-control" name="caripenggaris" placeholder="Cari Penggaris ..">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Merk Penggaris</th>
			<th>Harga Penggaris</th>
			<th>Tersedia</th>
			<th>Berat</th>
            <th>Opsi</th>
		</tr>
		@foreach($penggaris as $p)
		<tr>
            <td>{{ $p->merkpenggaris }}</td>
			<td>{{ $p->hargapenggaris }}</td>
            <td>
                <div class="custom-control custom-switch">
                    <input type="checkbox"
                        class="custom-control-input"
                        id="toggle-{{ $p->ID }}"
                        {{ $p->tersedia ? 'checked' : '' }}
                        disabled>
                    <label class="custom-control-label" for="toggle-{{ $p->ID }}"></label>
                </div>
            </td>

			<td>{{ $p->berat }}</td>
			<td>
				<a href="/penggaris/editpenggaris/{{ $p->ID }}" class="btn btn-success">Edit</a>
				<a href="/penggaris/hapuspenggaris/{{ $p->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $penggaris->links() }} <!-- ini untuk pagination, jadi nanti di bawah tabel ada paginationnya -->

@endsection
