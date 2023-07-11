@extends('admin.layout.index')
@section('content')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-book"></i>
          </span> Jenis Kegiatan
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
        <a href="{{url ('/dashboard/JenisKeg/create')}}" class="btn btn-gradient-primary">+ Tambah</a>
    </div>
    <br>
    <div class="card" style="margin-bottom: 100px;">
        <div class="card-body">
          @if (session('success'))
           <div class="alert alert-success">
               {{ session('success') }}
           </div>
          @endif
          <h4 class="card-title">Jenis KEgiatan</h4>
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr class="table-success">
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Action</th>
                            
                        </tr>
                        @foreach ($jenis_kegiatan as $jenis_kegiatans)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $jenis_kegiatans->nama }}</td>
                              
                              <td>
                                
                                <a href="{{ url('/dashboard/JenisKeg/edit', $jenis_kegiatans->id )}}" class="btn btn-success btn-sm">Edit</a>
                                  <form action="{{url('/dashboard/JenisKeg/destroy', $jenis_kegiatans->id)}}" method="post" class="d-inline">
                                  @csrf
                                  @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="if(!confirm('Anda Yakin Hapus Jenis Kegiatn?')) {return false}" >Delete</button>
                                  </form>
                              </td>
                          </tr>
                      
                              </td>
                          </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
      </div>

@endsection