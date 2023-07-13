@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-book"></i>
          </span>Kategori Peserta
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
      <a href="{{url ('/dashboard/kategori/create')}}" class="btn btn-gradient-primary">+ Tambah</a>
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
                            <th>Nama</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($kategori_peserta as $Kategori_peserta)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $Kategori_peserta->nama }}</td>
                              <td>
                                <a class="btn btn-primary btn-sm" href="{{ url('/dashboard/kategori/edit', $Kategori_peserta->id) }}">Edit</a>
                                  <form action="{{url('/dashboard/kategori/destroy', $Kategori_peserta->id)}}" method="post" class="d-inline">
                                  @csrf
                                  @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="if(!confirm('Anda Yakin Hapus Kegiatn?')) {return false}" >Delete</button>
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