@extends('frontend.layouts.app')

@section('content')
    <style>
        .text-wrap {
            word-wrap: break-word;
            word-break: break-word;
            white-space: normal;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">
                        <article>
                            <h2 class="title" style="color: black">{{ $data->judul ?? '' }}</h2>
                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-clock"></i>
                                        <time
                                            datetime="2020-01-01">{{ $data->created_at ? \Carbon\Carbon::parse($data->created_at)->translatedFormat('l, d F Y') : '' }}</time>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-img mt-3">
                                <img src="{{ asset('dist/assets/img/kurikulum/' . $data->image ?? '') }}" alt=""
                                    style="width: 100%" />
                            </div>
                            <div class="content">
                                <p style="text-align: justify; padding-bottom: 10px">
                                    Padang,
                                    {{ $data->created_at ? \Carbon\Carbon::parse($data->created_at)->translatedFormat('d F Y') : '' }}
                                    – {{ $data->isi_halaman ?? '' }}
                                </p>
                                <p>Link : <a href="{{ $data->link ?? '' }}" target="_blank">{{ $data->judul ?? '' }}</a></p>
                            </div>
                            <!-- End post content -->
                        </article>
                    </div>
                </section>
                <!-- /Blog Details Section -->
            </div>
        </div>
    </div>
@endsection
