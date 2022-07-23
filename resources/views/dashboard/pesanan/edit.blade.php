@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Pesanan</h1>
</div>
<div class="col-lg-8">

    <form method="post" action="{{ url('/dashboard/pesanan/'.$model->id) }}" class="mb-5" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="mb-3">
          <label for="id_pesanan" class="form-label">ID Pesanan</label>
          <input type="text" class="form-control @error('id_pesanan') is-invalid @enderror" id="id_pesanan" name="id_pesanan" required readonly autofocus value="{{ old('id_pesanan', $model->id_pesanan) }}">
          @error('id_pesanan')
          <div class="invalid-feedback">
              {{ $message }}
          </div>


          @enderror
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pemesan</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama', $model->nama) }}">
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
          </div>
          <div class="mb-3">
            <label for="no_hp" class="form-label">No Handphone</label>
            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" required autofocus value="{{ old('no_hp', $model->no_hp) }}">
            @error('no_hp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
          </div>
          {{-- <div class="mb-3">
            <label for="layanan" class="form-label">Layanan</label>
            <input type="text" class="form-control @error('layanan') is-invalid @enderror" id="layanan" name="layanan" required autofocus value="{{ old('layanan') }}">
            @error('layanan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
          </div> --}}

          <div class="mb-3">
            <label for="layanan" class="form-label">Layanan</label>
            <select class="form-select" name="layanan_id">
                @foreach ($layanans as $l)

                  @if (old('layanan_id', $model->layanan_id) == $l->id)
                  <option value="{{ $l->id }}" selected>{{ $l->nama_layanan }}</option>
                  @else
                  <option value="{{ $l->id }}">{{ $l->nama_layanan }}</option>
                  @endif

                @endforeach
            </select>
          </div>




          <div class="mb-3">
            <label for="jml_satuan" class="form-label">Jumlah Satuan</label>
            <input type="text" class="form-control @error('jml_satuan') is-invalid @enderror" id="jml_satuan" name="jml_satuan" required autofocus value="{{ old('jml_satuan', $model->jml_satuan) }}">
            @error('jml_satuan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            {{-- {{ date('d-m-Y') }} --}}
            @enderror
          </div>
          <div class="mb-3">
            <label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
            <input type="text" class="form-control @error('tgl_masuk') is-invalid @enderror" id="tgl_masuk" name="tgl_masuk" required readonly autofocus value="{{ old(date('Y-m-d'), $model->tgl_masuk) }}">
            @error('tgl_masuk')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
          </div>
          {{-- <div class="mb-3">
            <label for="tgl_selesai" class="form-label">Tanggal Selesai</label>

            <input type="text" class="form-control @error('tgl_selesai') is-invalid @enderror" id="tgl_selesai" name="tgl_selesai" required autofocus readonly value="{{ old(date('Y-m-d', time() + (60 * 60 * 24)),$model->tgl_selesai) }}">
            @error('tgl_selesai')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
          </div> --}}
          <div class="mb-3">
            <label for="total" class="form-label"> Total</label>
            <input type="text" class="form-control @error('total') is-invalid @enderror" id="total" name="total" required autofocus value="{{ old('total', $model->total) }}">
            @error('total')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
          </div>

       <button type="submit" class="btn btn-primary" onclick="return confirm('Yakin menyimpan perubahan?')">Simpan Perubahan</button>
      </form>

</div>
@endsection
