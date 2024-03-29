@extends('admin.layout.index')
@section('content')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-script"></i>
          </span> Daftar Peserta
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
        {{-- <a href="{{url ('/dashboard/book/create')}}" class="btn btn-gradient-primary">+ Tambah</a> --}}
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
                            <th>Tanggal Daftar</th>
                            <th>Alasan</th>
                            <th>Nama</th>
                            <th>Nama Kegiatan</th>
                            <th>kategori Peserta</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($daftar as $daftars)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $daftars->tgl_daftar }}</td>
                              <td>{{ $daftars->alasan }}</td>
                              <td>{{ $daftars->nama_peserta }}</td>
                              <td>{{ $daftars->nama_kegiatan }}</td>
                              <td>{{ $daftars->kategori_peserta }}</td>
                              <td>
                                  <form action="{{url('/dashboard/daftar/destroy', $daftars->id)}}" method="post" class="d-inline">
                                  @csrf
                                  @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="if(!confirm('Anda Yakin Hapus Peserta?')) {return false}" >Delete</button>
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