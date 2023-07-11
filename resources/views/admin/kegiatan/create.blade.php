@extends('admin.layout.index')
@section('content')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-book"></i>
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
            <h3>Tambah Kegiatan</h3><br />
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
            <form class="forms-sample" action="{{url('/dashboard/kegiatan/store')}}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="judul" class="col-sm-4 col-form-label">Kegiatan Judul</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="judul" name="judul"
                            placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kapasitas" class="col-sm-4 col-form-label">Kapasitas</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="kapasitas" name="kapasitas"
                            placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga_tiket" class="col-sm-4 col-form-label">Harga Tiket</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="harga_tiket" name="harga_tiket"
                            placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Pelaksanaan</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="tanggal" name="tanggal"
                            placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="narasumber" class="col-sm-4 col-form-label">Narasumber</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="narasumber" name="narasumber"
                            placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tempat" class="col-sm-4 col-form-label">Tempat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="tempat" name="tempat"
                            placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kegiatan" class="col-sm-4 col-form-label">Jenis Kegiatan</label>
                    <div class="col-sm-8">
                        <input type="Text" class="form-control" id="jenis_kegiatan" name="jenis_kegiatan"
                            placeholder="">
                    </div>
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                <button type="reset" class="btn btn-light">Reset</button>
            </form>
        </div>
    </div>
</div>

@endsection