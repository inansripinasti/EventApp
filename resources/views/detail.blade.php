@extends('landingPg.layout.index')
@section('content')
<div class="row justify-content-center">
    <div class=" col-md-5 ">

        <section id="contact" class="contact-area pt-115">
            <div class="container " style="border: 1px solid #ddd; margin-top:100px;">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="contact-title text-center" style="margin-top: 35px;">
                            <h3 class="title">Detail Kegiatan</h3>
                        </div> <!-- contact title -->
                    </div>
                </div> <!-- row -->
                <div class="contact-box mt-70">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-form">
                                <div>
                                    <img class="img-fluid" src="assets/images/product/produk.png" width="400px" alt="Foto Produk" />
                                    <div>
                                        <table class="table">
                                            <tr>
                                                <th>Judul</th>
                                                <td>{{$kegiatan->judul}}</td>
                                            </tr>
                                                <tr>
                                                <th>Kapasitas</th>
                                                <td>{{$kegiatan->kapasitas}}  Peserta</td>
                                            </tr>
                                            <tr>
                                                <th>Harga Tiket</th>
                                                <td>{{$kegiatan->harga_tiket}}</td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Acara</th>
                                                <td>{{$kegiatan->tanggal}}</td>
                                            </tr>
                                            <tr>
                                                <th>Narasumber</th>
                                                <td>{{$kegiatan->narasumber}}</td>
                                            </tr>
                                            <tr>
                                                <th>Lokasi</th>
                                                <td>{{$kegiatan->tempat}}</td>
                                            </tr>
                                            <tr>
                                                <th>Jenis Kegiatan</th>
                                                <td>{{$kegiatan->jenis_kegiatan}}</td>
                                            </tr>
                                        </table>
                                        <div class="container d-flex justify-content-center">
                                            <a class="main-btn" type="submit" style="border-radius: 30px; margin:auto" href="index.php#product">Kembali</a>
                                            <a class="main-btn" type="submit" style="border-radius: 30px; margin:auto" href="{{ url('/dashboard/daftar/create') }}">Booking Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- row -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- contact box -->
            </div> <!-- container -->
        </section>
    </div> <!-- single temp -->
</div>
@endsection