@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">List Pesanan</h1>
  </div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-6" role="alert">
        {{ session('success') }}
    </div>
@endif


  <div class="table-responsive col-lg-auto">
      <a href="/dashboard/pesanan/create" class="btn btn-danger mb-3">Tambah Pesanan</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">ID Pesanan</th>
          <th scope="col">Nama</th>
          <th scope="col">No Hp</th>
          {{-- <th scope="col">Tipe Layanan</th> --}}
          <th scope="col">Layanan</th>
          <th scope="col">Jumlah Satuan</th>
          <th scope="col">Tanggal Masuk</th>
          <th scope="col">Tanggal Selesai</th>
          <th scope="col">Total</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pesanan as $pesan )

        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $pesan->id_pesanan }}</td>
          <td>{{ $pesan->nama }}</td>
          <td>{{ $pesan->no_hp }}</td>
          {{-- <td>{{ $p->tipe_layanan }}</td> --}}
          <td>{{ $pesan->layanan }}</td>
          <td>{{ $pesan->jml_satuan }}</td>
          <td>{{ $pesan->tgl_masuk }}</td>
          <td>{{ $pesan->tgl_selesai }}</td>
          <td>{{ $pesan->total }}</td>

          <td>

            <a href="/dashboard/pesanan/{{ $pesan->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

            <form action="/dashboard/pesanan/{{ $pesan->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-success border-0" onclick="return confirm('Anda Yakin Menyelesaikan Pesanan?')"><span data-feather="check"></span></button>
            </form>
        </td>

        </tr>

        @endforeach
    </tbody>
    </table>
  </div>

@endsection
