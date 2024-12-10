@extends('frontend.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.webp)">
        <div class="container position-relative">
            <h2 style="font-weight: bold">Prosedur Peringatan Masa Studi</h2>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- About 3 Section -->
    <section id="recent-posts" class="recent-posts section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-md-12 justify-content-center text-center">
                    <img src="{{ asset('dist_frontend/assets/img/sop.png') }}" alt="Image" class="img-fluid" />
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
                        Menjadikan Jurusan Ilmu Komunikasi FISIP Unand sebagai basis pengembangan ilmu dan praktik
                        enterpreneur komunikasi khususnya di bidang Jurnalistik, Televisi dan Film, Public Relations, dan
                        Manajemen Komunikasi di Indonesia
                        pada tahun 2030.
                    </p>
                    <a href="ini merupakan link">Link</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /About 3 Section -->
@endsection
