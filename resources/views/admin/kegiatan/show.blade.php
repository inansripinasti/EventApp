@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
<div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span> Daftar Buku
    </h3>
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
          <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
        </li>
      </ul>
    </nav>
  </div>

  <a class="btn btn-primary" href="{{ url('/dashboard/kegiatan/create') }}">+ Tambah Buku</a>
  <div class="card">
  <div class="card-body">
    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    <h4 class="card-title">Daftar Buku Tersedia</h4>
  <div class="container">
  <div class="table-responsive">  
        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr class="table-success">
                    <th>No</th>
                    <th>judul</th>
                    <th>kapasitas</th>
                    <th>Harga Tiket</th>
                    <th>Tanggal</th>
                    <th>Nara Sumber</th>
                    <th>tempat</th>
                    <th>jenis_kegiatan</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{ $kegiatan->id }}</td>
                <td>{{ $kegiatan->judul }}</td>
                <td>{{ $kegiatan->kapasitas }}</td>
                <td>{{ $kegiatan->harga_tiket }}</td>
                <td>{{ $kegiatan->tanggal }}</td>
                <td>{{ $kegiatan->narasumber }}</td>
                <td>{{ $kegiatan->tempat }}</td>
                <td>{{ $kegiatan->jenis_kegiatan }}</td>
                </tr>
            </tbody>
        </table>
  </div>
  </div>
</div>
</div>        
@endsection