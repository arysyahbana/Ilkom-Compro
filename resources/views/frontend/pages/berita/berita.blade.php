@extends('frontend.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url(/dist_frontend/assets/img/page-title-bg.webp)">
        <div class="container position-relative">
            <h1>Berita</h1>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- About 3 Section -->
    <section id="recent-posts" class="recent-posts section">
        <div class="container">
            <div class="row">
                @php
                    $latestBerita = $dataBerita->sortByDesc('created_at')->first();
                    $latestBerita4 = $dataBerita->sortByDesc('created_at')->take(4);
                    $latestBerita8 = $dataBerita->sortByDesc('created_at')->take(8);
                @endphp
                <div class="col-lg-6 col-md-12">
                    <img src="{{ isset($latestBerita->image) ? asset('dist/assets/img/postinganberita/' . $latestBerita->image) : '' }}"
                        alt="Image" class="img-fluid" />
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="row gy-5">
                        @foreach ($latestBerita4 as $berita4)
                            <div class="col-lg-6 col-md-6">
                                <a href="{{ route('berita.beritadetail', $berita4->id) }}" class="">
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <div class="overflow-hidden" style="max-height: 150px">
                                            <img src="{{ isset($berita4->image) ? asset('dist/assets/img/postinganberita/' . $berita4->image) : '' }}"
                                                class="img-fluid" alt="{{ $berita4->judul ?? '' }}"
                                                style="width: 100%; object-fit: cover" />
                                        </div>
                                        <div style="margin-top: 10px">
                                            <div style="display: flex; align-items: center; color: gray; font-size: 14px">
                                                <i class="bi bi-calendar"></i>
                                                <span style="margin-left: 5px">
                                                    {{ $berita4->created_at ? \Carbon\Carbon::parse($berita4->created_at)->translatedFormat('l, d F Y') : '' }}
                                                </span>
                                            </div>
                                            <h3 style="color: black; font-size: 16px; margin-top: 5px; font-weight: bold">
                                                {{ $berita4->judul ?? '' }}
                                            </h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About 3 Section -->

    <section id="recent-posts" class="recent-posts section">
        <div class="container">
            <x-embed url="https://www.youtube.com/watch?v=4YCLRpKY1cs" />
            <div class="row">
                <div class="container" data-aos="fade-up">
                    <h2 class="content-title mb-4" style="color: black; font-weight: bold">Berita Terkini</h2>
                </div>
                <div class="col-lg-8 col-md-12 mb-4">
                    <div class="row gy-5">
                        @foreach ($latestBerita8 as $berita8)
                            <div class="col-lg-12 col-md-6">
                                <a href="{{ route('berita.beritadetail', $berita8->id) }}" class="">
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <div class="overflow-hidden" style="max-height: 500px">
                                            <img src="{{ isset($berita8->image) ? asset('dist/assets/img/postinganberita/' . $berita8->image) : '' }}"
                                                class="img-fluid" alt="{{ $berita8->judul ?? '' }}"
                                                style="width: 100%; object-fit: cover" />
                                        </div>
                                        <div style="margin-top: 10px">
                                            <div style="display: flex; align-items: center; color: gray; font-size: 14px">
                                                <i class="bi bi-calendar"></i>
                                                <span
                                                    style="margin-left: 5px">{{ $berita8->created_at ? \Carbon\Carbon::parse($berita8->created_at)->translatedFormat('l, d F Y') : '' }}</span>
                                            </div>
                                            <h3 style="color: black; font-size: 20px; margin-top: 5px; font-weight: bold">
                                                {{ $berita8->judul ?? '' }}
                                            </h3>
                                            <p>Padang,
                                                {{ \Carbon\Carbon::parse($berita8->created_at)->translatedFormat('d F Y') }}
                                                - {{ $berita8->isi_halaman ?? '' }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="d-flex align-items-start mb-4">
                        <iframe class="img-fluid" src="https://www.youtube.com/embed/VIDEO_ID_1"
                            style="width: 150px; height: 90px; border: none; flex-shrink: 0" allowfullscreen></iframe>
                        <div class="ms-3">
                            <p style="font-size: 14px; color: #b92383; margin: 0">Ranah Komunikasi UNAND</p>
                            <p style="font-size: 12px; color: #888888; margin: 0">12 Agustus 2024</p>
                            <h3 style="font-size: 14px; color: black; font-weight: bold; margin: 5px 0">Video Profil
                                Jurusan Ilmu Komunikasi...</h3>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <iframe class="img-fluid" src="https://www.youtube.com/embed/VIDEO_ID_2"
                            style="width: 150px; height: 90px; border: none; flex-shrink: 0" allowfullscreen></iframe>
                        <div class="ms-3">
                            <p style="font-size: 14px; color: #b92383; margin: 0">Ranah Komunikasi UNAND</p>
                            <p style="font-size: 12px; color: #888888; margin: 0">12 Agustus 2024</p>
                            <h3 style="font-size: 14px; color: black; font-weight: bold; margin: 5px 0">Karya Video
                                Dokumenter Departemen...</h3>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <iframe class="img-fluid" src="https://www.youtube.com/embed/VIDEO_ID_2"
                            style="width: 150px; height: 90px; border: none; flex-shrink: 0" allowfullscreen></iframe>
                        <div class="ms-3">
                            <p style="font-size: 14px; color: #b92383; margin: 0">Ranah Komunikasi UNAND</p>
                            <p style="font-size: 12px; color: #888888; margin: 0">12 Agustus 2024</p>
                            <h3 style="font-size: 14px; color: black; font-weight: bold; margin: 5px 0">Karya Video
                                Dokumenter Departemen...</h3>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <iframe class="img-fluid" src="https://www.youtube.com/embed/VIDEO_ID_2"
                            style="width: 150px; height: 90px; border: none; flex-shrink: 0" allowfullscreen></iframe>
                        <div class="ms-3">
                            <p style="font-size: 14px; color: #b92383; margin: 0">Ranah Komunikasi UNAND</p>
                            <p style="font-size: 12px; color: #888888; margin: 0">12 Agustus 2024</p>
                            <h3 style="font-size: 14px; color: black; font-weight: bold; margin: 5px 0">Karya Video
                                Dokumenter Departemen...</h3>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <iframe class="img-fluid" src="https://www.youtube.com/embed/VIDEO_ID_2"
                            style="width: 150px; height: 90px; border: none; flex-shrink: 0" allowfullscreen></iframe>
                        <div class="ms-3">
                            <p style="font-size: 14px; color: #b92383; margin: 0">Ranah Komunikasi UNAND</p>
                            <p style="font-size: 12px; color: #888888; margin: 0">12 Agustus 2024</p>
                            <h3 style="font-size: 14px; color: black; font-weight: bold; margin: 5px 0">Karya Video
                                Dokumenter Departemen...</h3>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <iframe class="img-fluid" src="https://www.youtube.com/embed/VIDEO_ID_2"
                            style="width: 150px; height: 90px; border: none; flex-shrink: 0" allowfullscreen></iframe>
                        <div class="ms-3">
                            <p style="font-size: 14px; color: #b92383; margin: 0">Ranah Komunikasi UNAND</p>
                            <p style="font-size: 12px; color: #888888; margin: 0">12 Agustus 2024</p>
                            <h3 style="font-size: 14px; color: black; font-weight: bold; margin: 5px 0">Karya Video
                                Dokumenter Departemen...</h3>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <iframe class="img-fluid" src="https://www.youtube.com/embed/VIDEO_ID_2"
                            style="width: 150px; height: 90px; border: none; flex-shrink: 0" allowfullscreen></iframe>
                        <div class="ms-3">
                            <p style="font-size: 14px; color: #b92383; margin: 0">Ranah Komunikasi UNAND</p>
                            <p style="font-size: 12px; color: #888888; margin: 0">12 Agustus 2024</p>
                            <h3 style="font-size: 14px; color: black; font-weight: bold; margin: 5px 0">Karya Video
                                Dokumenter Departemen...</h3>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <iframe class="img-fluid" src="https://www.youtube.com/embed/VIDEO_ID_2"
                            style="width: 150px; height: 90px; border: none; flex-shrink: 0" allowfullscreen></iframe>
                        <div class="ms-3">
                            <p style="font-size: 14px; color: #b92383; margin: 0">Ranah Komunikasi UNAND</p>
                            <p style="font-size: 12px; color: #888888; margin: 0">12 Agustus 2024</p>
                            <h3 style="font-size: 14px; color: black; font-weight: bold; margin: 5px 0">Karya Video
                                Dokumenter Departemen...</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
