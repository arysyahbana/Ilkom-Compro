@extends('frontend.layouts.app')

@section('content')
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url(/dist_frontend/assets/img/page-title-bg.webp)">
        <div class="container position-relative">
            <h1>Dosen Departemen Ilmu Komunikasi</h1>
        </div>
    </div>
    <!-- End Page Title -->

    <section id="recent-posts" class="recent-posts section">
        <div class="container">
            <div class="row">
                @foreach ($dosen as $item)
                    @if ($item->kategori == 'Kadep')
                        <div class="col-lg-12 col-md-12">
                            <div class="d-flex align-items-start justify-content-center mb-4">
                                <img src="{{ asset('dist_frontend/assets/img/dosen.png') }}" alt="Image"
                                    class="img-fluid" style="width: 20%" />
                                <div class="ms-3">
                                    <p style="font-size: 14px; color: #b92383; margin: 5px 0">Kepala Departemen Ilmu
                                        Komunikasi
                                    </p>
                                    <h3 style="font-weight: bold; margin: 5px 0">{{ $item->nama ?? '' }}</h3>
                                    <h4 style="color: #b5b1b1; margin: 5px 0">{{ $item->nip ?? '' }}</h4>
                                    <h3 style="font-size: 14px; color: black; font-weight: bold; margin: 5px 0">Konsentrasi:
                                    </h3>
                                    <h3 style="font-size: 14px; color: black; margin: 5px 0">
                                        {{ $item->rKonsentrasi->konsentrasi ?? '' }}</h3>
                                    <h3 style="font-size: 14px; color: black; font-weight: bold; margin: 5px 0">Bidang
                                        Kajian
                                    </h3>
                                    @if ($item->rBidangkajian != null)
                                        <h3 style="font-size: 14px; color: black; margin: 5px 0">
                                            {{ $item->rBidangkajian->pluck('bidang_kajian')->implode(', ') }}
                                        </h3>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-6 col-md-12 mt-4">
                            <div class="d-flex align-items-start justify-content-center mb-4">
                                <img src="{{ asset('dist_frontend/assets/img/dosen.png') }}" alt="Image"
                                    class="img-fluid" style="width: 30%" />
                                <div class="ms-3">
                                    <p style="font-size: 12px; color: #b92383; margin: 5px 0">
                                        {{ $item->kategori ?? '' }}
                                    </p>
                                    <h5 style="font-weight: bold; margin: 5px 0">{{ $item->nama ?? '' }}</h5>
                                    <h6 style="color: #b5b1b1; margin: 5px 0">{{ $item->nip ?? '' }}</h6>
                                    <h3 style="font-size: 12px; color: black; font-weight: bold; margin: 5px 0">Konsentrasi:
                                    </h3>
                                    <h3 style="font-size: 12px; color: black; margin: 5px 0">
                                        {{ $item->rKonsentrasi->konsentrasi ?? '' }}</h3>
                                    <h3 style="font-size: 12px; color: black; font-weight: bold; margin: 5px 0">Bidang
                                        Kajian
                                    </h3>
                                    @if ($item->kategori == 'Staff')
                                        <h3 style="font-size: 14px; color: black; margin: 5px 0">-</h3>
                                    @endif

                                    @if ($item->rBidangkajian != null)
                                        <h3 style="font-size: 14px; color: black; margin: 5px 0">
                                            {{ $item->rBidangkajian->pluck('bidang_kajian')->implode(', ') }}
                                        </h3>
                                    @else
                                        <h3 style="font-size: 14px; color: black; margin: 5px 0">-</h3>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
