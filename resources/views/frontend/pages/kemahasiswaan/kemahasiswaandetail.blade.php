@extends('frontend.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url(/dist_frontend/assets/img/page-title-bg.webp)">
        <div class="container position-relative">
            <h2 style="font-weight: bold">Pengembangan Kemahasiswaan</h2>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- About 3 Section -->
    <section id="recent-posts" class="recent-posts section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 justify-content-center text-center">
                    <img src="{{ asset('dist/assets/img/subkemahasiswaan/' . $dataKemahasiswaan->image) }}" alt="Image"
                        class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!-- /About 3 Section -->

    <!-- About 3 Section -->
    <section id="recent-posts" class="recent-posts section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p style="text-align: justify; color: #343434">
                        {{ $dataKemahasiswaan->isi_halaman ?? '' }}
                    </p>
                    <span>Link : </span>
                    <a href="{{ $dataKemahasiswaan->link ?? '' }}" target="_blank">{{ $dataKemahasiswaan->judul ?? '' }}</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /About 3 Section -->
    </section>
    <!-- /About 3 Section -->
@endsection
