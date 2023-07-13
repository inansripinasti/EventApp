@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
<div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-home"></i>
      </span> Kegiatan
    </h3>
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
          <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
        </li>
      </ul>
    </nav>
  </div>

  <div class="card">
  <div class="card-body">
    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
  <div class="container">
  <div class="table-responsive">  
        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
            <tr>
                <tr class="table-success">
                  <tr colspan="2" text-align="center">
                    <h4>Detail Kegiatan</h4>
                  </tr>
                  <tr>
                    <th>Id</th>
                    <td>{{ $kegiatan->id }}</td>
                  </tr>
                  <tr>
                    <th>judul</th>
                    <td>{{ $kegiatan->judul }}</td>
                  </tr>
                  <tr>
                    <th>kapasitas</th>
                    <td>{{ $kegiatan->kapasitas }}</td>
                  </tr>
                  <tr>
                    <th>Harga Tiket</th>
                    <td>{{ $kegiatan->harga_tiket }}</td>
                  </tr>
                  <tr>
                    <th>Tanggal</th>
                    <td>{{ $kegiatan->tanggal }}</td>
                  </tr>
                  <tr>
                    <th>Nara Sumber</th>
                    <td>{{ $kegiatan->narasumber }}</td>
                  </tr>
                  <tr>
                    <th>tempat</th>
                    <td>{{ $kegiatan->tempat }}</td>
                  </tr>
                  <tr>
                    <th>jenis_kegiatan</th>
                    <td>{{ $kegiatan->jenis_kegiatan }}</td>
                  </tr>
                </tr>
            </tr>
        </table> <br>
        <a href="{{url ('/dashboard/kegiatan/')}}" class="btn btn-gradient-danger">Back</a>
  </div>
  </div>
</div>
</div>        
@endsection