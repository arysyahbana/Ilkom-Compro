@extends('frontend.layouts.app')

@section('content')
    <style>
        .text-wrap {
            word-wrap: break-word;
            word-break: break-word;
            white-space: normal;
        }
    </style>
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div id="hero-carousel" class="carousel slide carousel-fade">
            <div class="carousel-item active">
                <img src="{{ asset('dist_frontend/assets/img/hero_1.jpg') }}" alt="" />
                <div class="carousel-container justify-content-center text-center">
                    <img src="{{ asset('dist_frontend/assets/img/unand.png') }}" class="logo-unand"
                        style="width: 100px; height: 100px; display: block; margin: 0 auto" alt="Image" />
                    <h2>Departemen Ilmu Komunikasi</h2>
                    <h3>Universitas Andalas</h3>
                </div>
            </div>
            <!-- End Carousel Item -->
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
        <div class="content">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item" style="display: flex; align-items: center; gap: 15px">
                            <div class="service-item-icon" style="color: white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                    class="bi bi-mortarboard" viewBox="0 0 16 16">
                                    <path
                                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                                    <path
                                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                                </svg>
                            </div>
                            <div class="service-item-content">
                                <h2 style="color: white"><strong>{{ $dataFakultas->jml_mahasiswa ?? 0 }}+</strong></h2>
                                <p style="color: white">Mahasiswa Aktif</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item" style="display: flex; align-items: center; gap: 15px">
                            <div class="service-item-icon" style="color: white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                    class="bi bi-mortarboard" viewBox="0 0 16 16">
                                    <path
                                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                                    <path
                                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                                </svg>
                            </div>
                            <div class="service-item-content">
                                <h2 style="color: white"><strong>{{ $dataFakultas->jml_dosen ?? 0 }}+</strong></h2>
                                <p style="color: white">Dosen</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item" style="display: flex; align-items: center; gap: 15px">
                            <div class="service-item-icon" style="color: white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                    class="bi bi-mortarboard" viewBox="0 0 16 16">
                                    <path
                                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                                    <path
                                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                                </svg>
                            </div>
                            <div class="service-item-content">
                                <h2 style="color: white"><strong>{{ $dataFakultas->jml_publikasi ?? 0 }}+</strong></h2>
                                <p style="color: white">Jumlah Publikasi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item" style="display: flex; align-items: center; gap: 15px">
                            <div class="service-item-icon" style="color: white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                                    class="bi bi-mortarboard" viewBox="0 0 16 16">
                                    <path
                                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                                    <path
                                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                                </svg>
                            </div>
                            <div class="service-item-content">
                                <h2 style="color: white"><strong>{{ $dataFakultas->jml_alumni ?? 0 }}+</strong></h2>
                                <p style="color: white">Alumni</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Services Section -->

    <!-- About 3 Section -->
    <section id="about-3" class="about-3 section">
        <div class="container">
            <div class="row gy-4 justify-content-between align-items-center">
                <div class="col-lg-5 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <p style="color: #b92383">Communication Science</p>
                    <h2 class="content-title mb-4" style="color: black; font-weight: bold">Visi & Strategi</h2>
                    <p class="mb-4" style="color: #817e7e; font-size: 16px">
                        Menjadikan Jurusan Ilmu Komunikasi FISIP Unand sebagai basis pengembangan ilmu dan
                        praktik enterpreneur komunikasi  khususnya di bidang  Jurnalistik, Televisi dan Film, Public
                        Relations, dan Manajemen Komunikasi di Indonesia
                        pada tahun 2030. Sasaran program studi dan strategi pencapaian visi dan misi program studi
                        dilakukan dalam 3 (tiga) periode pencapaian yaitu 2015-2020, 2020-2025, 2025-2030, dimana
                        pencapaian setiap periodenya memiliki
                        ukuran capaian keberhasilan yang ditargetkan.
                    </p>
                </div>
                <div class="col-lg-6 order-lg-1 position-relative" data-aos="zoom-out">
                    <img src="{{ asset('dist_frontend/assets/img/img_sq_1.jpg') }}" alt="Image" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
    <!-- /About 3 Section -->

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="content">
            <div class="container">
                <div class="row gy-4 justify-content-between align-items-center">
                    <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <p style="color: #b92383">Kepala Departemen</p>
                        <h2 class="content-title mb-4" style="color: black; font-weight: bold">Sambutan</h2>
                        <p class="mb-4" style="color: #817e7e; font-size: 16px">
                            Kami bangga menjadi bagian dari perjalanan Anda dalam memahami dan mengembangkan potensi
                            di bidang komunikasi. Jurusan kami berkomitmen untuk menciptakan lulusan yang tidak
                            hanya unggul secara akademis, tetapi juga
                            memiliki kemampuan kritis dan kreatif dalam menghadapi tantangan dunia komunikasi yang
                            terus berkembang.
                        </p>
                    </div>
                    <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
                        <img src="{{ asset('dist_frontend/assets/img/img_sq_2.jpg') }}" alt="Image"
                            class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Section -->

    <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">
        <div class="container">
            <div class="row">
                @php
                    $filteredBerita = $dataBerita->filter(function ($item) {
                        return !empty($item->image) && empty($item->link);
                    });
                    $filteredVideo = $dataBerita->filter(function ($item) {
                        return !empty($item->link) && empty($item->image);
                    });

                    $latestBerita = $filteredBerita->sortByDesc('created_at')->take(6);
                    $latestVideo = $filteredVideo->sortByDesc('created_at')->take(4);
                @endphp
                <!-- Kolom Blog -->
                <div class="col-lg-8 col-md-12 mb-4">
                    <div class="container" data-aos="fade-up">
                        <p style="color: #b92383">Cerita Departemen Ilmu Komunikasi</p>
                        <h2 class="content-title mb-4" style="color: black; font-weight: bold">Berita</h2>
                    </div>
                    <div class="row gy-5">
                        @foreach ($latestBerita as $berita)
                            @if ($berita->image)
                                <div class="col-lg-4 col-md-6">
                                    <a href="{{ route('berita.beritadetail', $berita->id) }}" class="">
                                        <div data-aos="fade-up" data-aos-delay="100">
                                            <div class="overflow-hidden" style="max-height: 150px">
                                                <img src="{{ isset($berita->image) ? asset('dist/assets/img/postinganberita/' . $berita->image) : asset('dist_frontend/assets/img/img_sq_1.jpg') }}"
                                                    class="img-fluid" alt="{{ $berita->judul ?? '' }}"
                                                    style="width: 100%; object-fit: cover" />
                                            </div>
                                            <div style="margin-top: 10px">
                                                <div
                                                    style="display: flex; align-items: center; color: gray; font-size: 14px">
                                                    <i class="bi bi-calendar"></i>
                                                    <span style="margin-left: 5px">
                                                        {{ $berita && $berita->created_at ? \Carbon\Carbon::parse($berita->created_at)->translatedFormat('l, d F Y') : '' }}
                                                    </span>
                                                </div>
                                                <h3 class="text-wrap"
                                                    style="color: black; font-size: 16px; margin-top: 5px; font-weight: bold">
                                                    {{ $berita->judul ?? '' }}</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <!-- Kolom Video -->
                <div class="col-lg-4 col-md-12">
                    <div class="container" data-aos="fade-up">
                        <p style="color: #b92383">Karya-karya Ilmu Komunikasi</p>
                        <h2 class="content-title mb-4" style="color: black; font-weight: bold">Video Kami</h2>
                    </div>
                    @foreach ($latestVideo as $video)
                        <a href="{{ route('berita.beritadetail', $video->id) }}" class="">
                            <div class="d-flex align-items-start mb-4">
                                <div class="col-5">
                                    <x-embed url="{{ $video->link ?? '' }}" aspect-ratio="16:9" />
                                </div>
                                <div class="ms-3">
                                    <p style="font-size: 14px; color: #b92383; margin: 0">{{ $video->judul ?? '' }}
                                    </p>
                                    <p style="font-size: 12px; color: #888888; margin: 0">
                                        {{ $video && $video->created_at ? \Carbon\Carbon::parse($video->created_at)->translatedFormat('d F Y') : '' }}
                                    </p>
                                    <h5 class="text-wrap" style="font-size: 14px; color: black; margin: 5px 0">
                                        {{ \Illuminate\Support\Str::limit($video->isi_halaman ?? '', 30, '...') }}</h5>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- /Recent Posts Section -->

    <!-- About 3 Section -->
    <section id="about-3" class="about-3 section">
        <div class="container">
            <div class="row gy-4 justify-content-between align-items-center">
                <div class="col-lg-7 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <p style="color: #b92383">Kegiatan Kami</p>
                    <h2 class="content-title mb-4" style="color: black; font-weight: bold">Agenda Departemen</h2>
                    <div class="col-xl-12 col-md-6">
                        <a href="{{ route('berita.agendadetail', $dataAgenda->id ?? '') }}"
                            class="readmore stretched-link">
                            <div data-aos="fade-up" data-aos-delay="100">
                                <div>
                                    <img src="{{ isset($dataAgenda->image) ? asset('dist/assets/img/agenda/' . $dataAgenda->image) : asset('dist_frontend/assets/img/img_sq_1.jpg') }}"
                                        alt="" style="width: 100%" />
                                </div>
                                <div style="margin-top: 10px">
                                    <div style="display: flex; align-items: center; color: gray; font-size: 14px">
                                        <i class="bi bi-calendar"></i>
                                        <span style="margin-left: 5px">
                                            {{ $dataAgenda && $dataAgenda->created_at ? \Carbon\Carbon::parse($dataAgenda->created_at)->translatedFormat('l, d F Y') : '' }}
                                        </span>
                                    </div>
                                    <h3 class="text-wrap"
                                        style="color: black; font-size: 16px; margin-top: 5px; font-weight: bold">
                                        {{ $dataAgenda->judul ?? '' }}
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 order-lg-1" data-aos="zoom-out">
                    <div class="col-xl-12 col-md-6">
                        <div class="card" style="width: 90%; background-color: #47245c; color: white">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"
                                    style="color: white; background-color: #47245c; font-weight: bold; font-size: 24px">
                                    Pengumuman</li>
                                @foreach ($dataPengumuman as $pengumuman)
                                    <li class="list-group-item" style="color: white; background-color: #47245c">
                                        <a href="{{ $pengumuman->link ?? '' }}" target="_blank">
                                            <p style="color: #d4b6e5; font-size: 16px">
                                                {{ $pengumuman->created_at ? \Carbon\Carbon::parse($pengumuman->created_at)->translatedFormat('l, d F Y') : '' }}
                                            </p>
                                            <p class="text-light" style="font-weight: bold; font-size: 16px">
                                                {{ $pengumuman->nama ?? '' }}
                                            </p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About 3 Section -->

    <!-- Services 2 Section -->
    <section id="services-2" class="services-2">
        <!-- Section Title -->
        <div class="container" style="justify-content: left; text-align: left !important" data-aos="fade-up">
            <p style="color: #b92383">Foto-Foto Departemen</p>
            <h2 class="content-title mb-4" style="color: black; font-weight: bold">Galeri Komunikasi</h2>
        </div>
        <!-- End Section Title -->

        <div class="services-carousel-wrap">
            <div class="container">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                            {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            },
                            "navigation": {
                                "nextEl": ".js-custom-next",
                                "prevEl": ".js-custom-prev"
                            },
                            "breakpoints": {
                                "320": {
                                "slidesPerView": 1,
                                "spaceBetween": 40
                                },
                                "1200": {
                                "slidesPerView": 3,
                                "spaceBetween": 40
                                }
                            }
                            }
                        </script>
                    <button class="navigation-prev js-custom-prev">
                        <i class="bi bi-arrow-left-short"></i>
                    </button>
                    <button class="navigation-next js-custom-next">
                        <i class="bi bi-arrow-right-short"></i>
                    </button>
                    <div class="swiper-wrapper">
                        @foreach ($dataGaleri as $galeri)
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <div class="service-item-contents">
                                        <a href="#">
                                            <span
                                                class="service-item-category">{{ $galeri->created_at ? \Carbon\Carbon::parse($galeri->created_at)->translatedFormat('d F Y') : '' }}</span>
                                            <h2 class="service-item-title">{{ $galeri->nama_kegiatan ?? '' }}</h2>
                                        </a>
                                    </div>
                                    <img src="{{ asset('dist/assets/img/galeriilkom/' . $galeri->image ?? '') }}"
                                        alt="{{ $galeri->nama_kegiatan ?? '' }}" class="img-fluid" />
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Services 2 Section -->
@endsection
