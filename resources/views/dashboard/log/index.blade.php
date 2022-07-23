@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Riwayat Pesanan</h1>
  </div>


  <div class="table-responsive col-lg-auto">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">ID Pesanan</th>
          <th scope="col">Nama</th>
          <th scope="col">Tanggal Selesai</th>
          <th scope="col">Total</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($logs as $log)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $log->id_pesanan }}</td>
            <td>{{ $log->nama }}</td>
            <td>{{ $log->tgl_selesai }}</td>
            <td>{{ $log->total }}</td>
            <td><a href="/dashboard/log/{{ $log->id }}" class="badge bg-info"><span data-feather="eye"></span></a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
  </div>

@endsection
