@extends('template')

@section('content')
	<h3>Data Penggaris</h3>

	<a href="/penggaris" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

    {{-- action mengarah ke penggaris/store untuk dilakukan routing --}}
	<form action="/penggaris/storepenggaris" method="post" class="form-horizontal">
        <!-- form-horizontal untuk membuat form menjadi horizontal, jadi labelnya di kiri, inputnya di kanan -->
		{{ csrf_field() }}

        <div class="form-group">
            <label class="control-label col-sm-2" for="merk">
                merk
            </label>
            <div class="col-6">
                   <input class="form-control"
                   type="text"
                   id="merk"
                   placeholder="Masukkan Merk Lengkap"
                   name="merk" required="required">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="harga">
                harga
            </label>
            <div class="col-6">
                   <input class="form-control"
                   type="number"
                   id="harga"
                   placeholder="Masukkan harga Lengkap"
                   name="harga" required="required">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="tersedia">
                tersedia
            </label>
            <div class="col-6">
                <div class="custom-control custom-switch">
                    <input type="checkbox"
                        class="custom-control-input"
                        id="switch1"
                        name="tersedia"
                        value="1">
                    <label class="custom-control-label" for="switch1">Ya</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="berat">
                berat
            </label>
            <div class="col-6">
                   <input class="form-control"
                   type="number"
                   step="0.01"
                   id="berat"
                   placeholder="Masukkan Berat Lengkap"
                   name="berat" required="required">
                </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
