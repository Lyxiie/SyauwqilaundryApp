@extends('dashboard.layouts.main')
@section('container')

<div class="card w-50 position-relative position-absolute top-50 start-50 translate-middle">
    <div class="card-body">
      <h5 class="card-title text-center">Riwayat Pesanan</h5>
      <br>
      <div class="table-responsive col-lg-auto">
        <table class="table table-striped table-sm">
                <tr>
                  <th scope="col">ID Pesanan</th><td>{{ $log->id_pesanan }}</td>
                </tr>
                <tr>
                    <th scope="col">Nama</th><td>{{ $log->nama }}</td>
                </tr>
                <tr>
                    <th scope="col">No Hp</th><td>{{ $log->no_hp }}</td>
                </tr>
                <tr>
                    <th scope="col">Layanan</th><td>{{ $log->layanan }}</td>
                </tr>
                <tr>
                    <th scope="col">Jumlah Satuan</th><td>{{ $log->jml_satuan }}</td>
                </tr>
                <tr>
                    <th scope="col">Tanggal Masuk</th><td>{{ $log->tgl_masuk }}</td>
                </tr>
                <tr>
                    <th scope="col">Tanggal Selesai</th><td>{{ $log->tgl_selesai }}</td>
                </tr>
                <tr>
                    <th scope="col">Total</th><td>{{ $log->total }}</td>
                </tr>
        </table>
      </div>
      <a href="#" class="btn btn-success">Cetak Nota</a>
    </div>
  </div>

@endsection
