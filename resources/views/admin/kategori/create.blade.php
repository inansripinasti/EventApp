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
                      <form role="form" action="{{url('/dashboard/kategori/store')}}" method="POST" id="contactForm" name="contact-form" data-toggle="validator">
                        @csrf
                          <div class="form-group row">
                              <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                              <div class="col-sm-8">
                                  <input type="text" class="form-control" id="nama" name="nama"
                                      placeholder="Masukan Nama">
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