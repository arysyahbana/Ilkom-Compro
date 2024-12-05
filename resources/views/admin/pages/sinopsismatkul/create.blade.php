@extends('admin.layouts.app')

@section('title', 'Sinopsis Mata Kuliah | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <h4 class="mb-3">Sinopsis Mata Kuliah</h4>
            <div class="card">
                <div class="card-body">
                    <div class="tab-content mt-3">
                        <form action="{{ route('sinopsismatkul.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="judul" class="form-label fw-bold">Judul</label>
                                <input class="form-control" type="text" id="judul" name="judul">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label fw-bold">Pdf</label>
                                <input class="form-control" type="file" id="formFile" name="pdf">
                            </div>
                            <button type="submit" class="btn form-control text-light"
                                style="background-color: #47245C; border-radius: 0.5rem">Simpan</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
