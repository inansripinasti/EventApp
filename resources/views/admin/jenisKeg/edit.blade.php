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
            <form class="forms-sample" action="{{ url('/dashboard/JenisKeg/update', $jenis_kegiatan->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group row">
                    <label for="nama" class="col-sm-4 col-form-label">nama jenis kegiatan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="nama" value="{{ $jenis_kegiatan->nama }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                <a type="button" href="{{ url('/dashboard/kegiatan') }}" class="btn btn-light">Back</a>
                
            </form>
        </div>
    </div>
</div>

@endsection