@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Layanan</h1>
</div>
<div class="col-lg-8">

    <form method="post" action="{{ url('/dashboard/layanan/'.$model->id) }}" class="mb-5" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="mb-3">
          <label for="id_layanan" class="form-label">ID Layanan</label>
          <input type="text" class="form-control @error('id_layanan') is-invalid @enderror" id="id_layanan" name="id_layanan" required autofocus value="{{ old('id_layanan', $model->id_layanan) }}">
          @error('id_layanan')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror
        </div>
        <div class="mb-3">
            <label for="nama_layanan" class="form-label">Nama Layanan</label>
            <input type="text" class="form-control @error('nama_layanan') is-invalid @enderror" id="nama_layanan" name="nama_layanan" required autofocus value="{{ old('nama_layanan', $model->nama_layanan) }}">
            @error('nama_layanan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
          </div>
          <div class="mb-3">
            <label for="harga_layanan" class="form-label">Harga Layanan</label>
            <input type="text" class="form-control @error('harga_layanan') is-invalid @enderror" id="harga_layanan" name="harga_layanan" required autofocus value="{{ old('harga_layanan', $model->harga_layanan) }}">
            @error('harga_layanan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
          </div>
          <div class="mb-3">
            <label for="waktu" class="form-label">Waktu</label>
            <input type="text" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" required autofocus value="{{ old('waktu', $model->waktu) }}">
            @error('waktu')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
          </div>


       <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </form>

</div>
@endsection
