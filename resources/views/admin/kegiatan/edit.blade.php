@extends('admin.layout.index')
@section('content')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-book"></i>
            </span> Buku
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
            <h3>Tambah Buku</h3><br />
            {{-- menampilkan error validasi --}}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- form validasi -->
            <form class="forms-sample" action="{{ url('/dashboard/kegiatan/update', $kegiatan->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group row">
                    <label for="judul" class="col-sm-4 col-form-label">Kegiatan Judul</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="judul" name="judul"
                            placeholder="" value="{{ $kegiatan->judul }}" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kapasitas" class="col-sm-4 col-form-label">Kapasitas</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="kapasitas" name="kapasitas"
                            placeholder="" value="{{ $kegiatan->kapasitas }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga_tiket" class="col-sm-4 col-form-label">Harga Tiket</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="harga_tiket" name="harga_tiket"
                            placeholder="" value="{{ $kegiatan->harga_tiket }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Pelaksanaan</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                            placeholder="" value="{{ $kegiatan->tanggal }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="narasumber" class="col-sm-4 col-form-label">Narasumber</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="narasumber" name="narasumber"
                            placeholder="" value="{{ $kegiatan->narasumber }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tempat" class="col-sm-4 col-form-label">Tempat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="tempat" name="tempat"
                            placeholder="" value="{{ $kegiatan->tempat }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kegiatan" class="col-sm-4 col-form-label">Jenis Kegiatan</label>
                    <div class="col-sm-8">
                        <input type="Text" class="form-control" id="jenis_kegiatan" name="jenis_kegiatan"
                            placeholder="" value="{{ $kegiatan->jenis_kegiatan }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                <button type="reset" class="btn btn-light">Reset</button>
            </form>
        </div>
    </div>
</div>

@endsection