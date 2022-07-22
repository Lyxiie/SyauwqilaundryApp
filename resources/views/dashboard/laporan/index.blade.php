@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Laporan Keuangan</h1>
  </div>
    <br>
    <form action="/dashboard/cari-laporan" method="get">
        @csrf
    <div class="form-group col-lg-3">
        <label class="mb-1" for="dari" style="color: black;"><b>Dari</b></label>
        <input name="dari" type="date" class="form-control" id="dari" placeholder="Tanggal" autocomplete="off">
    </div>
    <br>
    <div class="form-group col-lg-3">
        <label  class="mb-1" for="sampai" style="color: black;"><b>Sampai</b></label>
        <input name="sampai" type="date" class="form-control" id="sampai" placeholder="Tanggal" autocomplete="off">
    </div>
    <br>
    <button type="submit" class="btn btn-danger">Cari</button>
</form>

@if(isset($pesanan))
<br>
<div class="table-responsive col-lg-auto">
    <h3>Hasil Data Pencarian</h3>
    <a href="#" class="btn btn-success">Cetak Laporan</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>

        <th scope="col">No</th>
        <th scope="col">ID Pesanan</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Biaya</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pesanan as $pesan)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pesan->id_pesanan }}</td>
            <td>{{ $pesan->tgl_selesai }}</td>
            <td>Rp. {{ number_format($pesan->total,0,",",".") }}</td>
        </tr>

        @endforeach
        <tr>
            <td colspan="3" align="center"><b><i>Total Pemasukan :</i></b></td>
            <td><b><i>Rp. {{ number_format($total,0,",",".") }}</i></b></td>
        </tr>
    </tbody>

  </table>
</div>

@endif

@endsection
