@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-book"></i>
          </span> Daftar Kegiatan
        </h3>
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
              <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
            </li>
          </ul>
        </nav>
    </div>
    <div>
        <a href="{{url ('/dashboard/kegiatan/create')}}" class="btn btn-gradient-primary">+ Tambah</a>
    </div>
    <br>
    <div class="card" style="margin-bottom: 100px;">
        <div class="card-body">
          @if (session('success'))
           <div class="alert alert-success">
               {{ session('success') }}
           </div>
          @endif
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr class="table-success">
                            <th>No</th>
                            <th>judul</th>
                            <th>kapasitas</th>
                            <th>Harga Tiket</th>
                            <th>Nara Sumber</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($kegiatan as $kegiatans)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $kegiatans->judul }}</td>
                              <td>{{ $kegiatans->kapasitas }}</td>
                              <td>{{ $kegiatans->harga_tiket }}</td>
                              <td>{{ $kegiatans->narasumber }}</td>
                              <td>
                                <a href="{{ url('/dashboard/kegiatan/show', $kegiatans->id )}}" class="btn btn-success btn-sm">View</a>
                                <a href="{{ url('/dashboard/kegiatan/edit', $kegiatans->id )}}" class="btn btn-primary btn-sm">Edit</a>
                                  <form action="{{url('/dashboard/kegiatan/destroy', $kegiatans->id)}}" method="post" class="d-inline">
                                  @csrf
                                  @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="if(!confirm('Anda Yakin Hapus Kegiatan?')) {return false}" >Delete</button>
                                  </form>
                              </td>
                          </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
      </div>


@endsection