{{-- @extends('landingPg.layout.index')
@section('content') --}}

        <!-- Contact Us Section -->
        <section id="contact-map" class="section-padding">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12">
                  <div class="section-title-header text-center">
                    <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Drop A Message</h1>
                    <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
                  </div>
                </div>
                <div class="col-lg-7 col-md-12 col-xs-12">
                  <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="form-wrapper">
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
                      <form role="form" action="{{url('/dashboard/daftar/store')}}" method="POST" id="contactForm" name="contact-form" data-toggle="validator">
                        @csrf
                          <div class="form-group row">
                              <label for="nama_peserta" class="col-sm-4 col-form-label">Nama</label>
                              <div class="col-sm-8">
                                  <input type="text" class="form-control" id="nama_peserta" name="nama_peserta"
                                      placeholder="Masukkan Nama">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="tgl_daftar" class="col-sm-4 col-form-label">Tanggal Daftar</label>
                              <div class="col-sm-8">
                                  <input type="date" class="form-control" id="tgl_daftar" name="tgl_daftar"
                                      placeholder="">
                              </div>
                          </div>
                          <div class="form-group row">
                            <label for="nama_kegiatan" class="col-sm-4 col-form-label">Kegiatan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan"
                                    placeholder="pilih nama kegiatan">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="kategori_peserta" class="col-sm-4 col-form-label">Kategori Peserta</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="kategori_peserta" name="kategori_peserta"
                                    placeholder="pilih kategori peserta">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="alasan" class="col-sm-4 col-form-label">Alasan</label>
                            <div class="col-sm-8">
                                <textarea name="alasan" id="alasan" type="text" class="form-control" cols="30" rows="5"></textarea>
                            </div>
                          </div>
                            <div class="form-submit">
                              <button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Submit </button>
                              <div id="msgSubmit" class="h3 text-center hidden"></div>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Contact Us Section End -->
{{-- @endsection --}}