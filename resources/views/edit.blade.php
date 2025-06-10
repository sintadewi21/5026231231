@extends('template')

@section('content')
	<h3>Edit Pegawai</h3>

	<a href="/pegawai" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		<div class="form-group">
            <label class="control-label col-sm-2" for="nama">
                Nama
            </label>
            <div class="col-6">
                   <input class="form-control"
                   type="text"
                   id="nama"
                   placeholder="Masukkan Nama Lengkap"
                   name="nama" required="required">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="jabatan">
                Jabatan
            </label>
            <div class="col-6">
                   <input class="form-control"
                   type="text"
                   id="jabatan"
                   placeholder="Masukkan Jabatan Lengkap"
                   name="jabatan" required="required">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="umur">
                Umur
            </label>
            <div class="col-6">
                   <input class="form-control"
                   type="text"
                   id="umur"
                   placeholder="Masukkan Umur Lengkap"
                   name="umur" required="required">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="alamat">
                Alamat
            </label>
            <div class="col-6">
                   <textarea class="form-control"
                   type="text"
                   id="alamat"
                   placeholder="Masukkan Alamat Lengkap"
                   name="alamat" required="required"></textarea>
                </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach


@endsection
