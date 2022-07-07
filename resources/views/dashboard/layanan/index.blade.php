@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Layanan</h1>
  </div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-6" role="alert">
        {{ session('success') }}
    </div>
@endif


  <div class="table-responsive col-lg-auto">
      <a href="/dashboard/layanan/create" class="btn btn-danger mb-3">Tambah Layanan</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">ID Layanan</th>
          <th scope="col">Nama Layanan</th>
          <th scope="col">Harga Layanan</th>
          <th scope="col">Waktu Layanan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($layanan as $layan )

        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $layan->id_layanan }}</td>
          <td>{{ $layan->nama_layanan }}</td>
          <td>{{ $layan->harga_layanan }}</td>
          <td>{{ $layan->waktu }} Hari</td>
          <td>

            <a href="/dashboard/layanan/{{ $layan->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>

            <form action="/dashboard/layanan/{{ $layan->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
            </form>
        </td>

        </tr>

        @endforeach
    </tbody>
    </table>
  </div>

@endsection
