@extends('admin.layouts.app')

@section('title', 'Edit Dosen | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="">Edit Dosen</h3>
                    <div class="tab-content mt-3">
                        <form action="{{ route('dosen.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama"
                                    placeholder="Masukkan nama" value="{{ $item->nama ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="nip" class="form-label">NIP</label>
                                <input type="number" name="nip" class="form-control" id="nip"
                                    placeholder="Masukkan NIP" value="{{ $item->nip ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="nidn" class="form-label">NIDN</label>
                                <input type="number" name="nidn" class="form-control" id="nidn"
                                    placeholder="Masukkan NIDN" value="{{ $item->nidn ?? '' }}">
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir"
                                        placeholder="Masukkan tempat lahir" value="{{ $item->tempat_lahir ?? '' }}">
                                </div>
                                <div class="col-6">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir"
                                        placeholder="Masukkan tanggal lahir" value="{{ $item->tanggal_lahir ?? '' }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="pangkat" class="form-label">Pangkat</label>
                                    <select class="form-select" aria-label="Default select example" id="pangkat"
                                        name="pangkat_id">
                                        <option selected hidden value="0">--- Pilih Pangkat ---</option>
                                        @foreach ($pangkats as $pangkat)
                                            <option value="{{ $pangkat->id ?? '0' }}"
                                                @if ($item->rPangkat->id == $pangkat->id) selected @endif>
                                                {{ $pangkat->pangkat ?? '' }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="golongan" class="form-label">Golongan</label>
                                    <select class="form-select" aria-label="Default select example" id="golongan"
                                        name="golongan_id">
                                        <option selected hidden value="0">--- Pilih Golongan ---</option>
                                        @foreach ($golongans as $golongan)
                                            <option value="{{ $golongan->id ?? '0' }}"
                                                @if ($item->rGolongan->id == $golongan->id) selected @endif>
                                                {{ $golongan->golongan ?? '' }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <select class="form-select" aria-label="Default select example" id="jabatan"
                                    name="jabatan_id">
                                    <option selected hidden value="0">--- Pilih Jabatan ---</option>
                                    @foreach ($jabatans as $jabatan)
                                        <option value="{{ $jabatan->id ?? '0' }}"
                                            @if ($item->rJabatan->id == $jabatan->id) selected @endif>{{ $jabatan->jabatan ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="konsentrasi" class="form-label">Konsentrasi</label>
                                <select class="form-select" aria-label="Default select example" id="konsentrasi"
                                    name="konsentrasi_id">
                                    <option selected hidden value="0">--- Pilih Konsentrasi ---</option>
                                    @foreach ($konsentrasis as $konsentrasi)
                                        <option value="{{ $konsentrasi->id ?? '0' }}"
                                            @if ($item->rKonsentrasi->id == $konsentrasi->id) selected @endif>
                                            {{ $konsentrasi->konsentrasi ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="bidangkajian" class="form-label">Bidang Kajian</label>
                                <select class="form-select bidangkajian" aria-label="Default select example"
                                    id="bidangkajian" name="bidang_kajian[]" multiple="multiple">
                                    @foreach ($bidangkajians as $bidangkajian)
                                        <option value="{{ $bidangkajian->id ?? '0' }}"
                                            @if ($item->rBidangKajian->contains('id', $bidangkajian->id)) selected @endif>
                                            {{ $bidangkajian->bidang_kajian ?? '' }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="alamat_instansi" class="form-label">Alamat Instansi</label>
                                <input type="text" name="alamat_instansi" class="form-control" id="alamat_instansi"
                                    placeholder="Masukkan alamat instansi" value="{{ $item->alamat_instansi ?? '' }}">
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label for="telpon" class="form-label">Telpon</label>
                                    <input type="number" name="telpon" class="form-control" id="telpon"
                                        placeholder="Masukkan telpon" value="{{ $item->telpon ?? '' }}">
                                </div>
                                <div class="col-6">
                                    <label for="fax" class="form-label">Fax</label>
                                    <input type="number" name="fax" class="form-control" id="fax"
                                        placeholder="Masukkan fax" value="{{ $item->fax ?? '' }}">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Masukkan email" value="{{ $item->email ?? '' }}">
                            </div>

                            <label class="form-label">Sarjana (S1)</label>
                            <div class="row mb-3">
                                <div class="col-4">
                                    <label for="jurusan_s1" class="form-label">Jurusan</label>
                                    <input type="text" name="jurusan_s1" class="form-control" id="jurusan_s1"
                                        placeholder="Masukkan jurusan" value="{{ $jurusan_s1 ?? '' }}">
                                </div>
                                <div class="col-4">
                                    <label for="perguruan_tinggi_s1" class="form-label">Perguruan Tinggi</label>
                                    <input type="text" name="perguruan_tinggi_s1" class="form-control"
                                        id="perguruan_tinggi_s1" placeholder="Masukkan perguruan tinggi"
                                        value="{{ $perguruan_tinggi_s1 ?? '' }}">
                                </div>
                                <div class="col-4">
                                    <label for="tahun_s1" class="form-label">Tahun</label>
                                    <input type="number" name="tahun_s1" class="form-control" id="tahun_s1"
                                        min="1900" max="2100" placeholder="Masukkan tahun"
                                        placeholder="Masukkan tahun" value="{{ $tahun_s1 ?? '' }}">
                                </div>
                            </div>

                            <label class="form-label">Magister (S2)</label>
                            <div class="row mb-3">
                                <div class="col-4">
                                    <label for="jurusan_s2" class="form-label">Jurusan</label>
                                    <input type="text" name="jurusan_s2" class="form-control" id="jurusan_s2"
                                        placeholder="Masukkan jurusan" value="{{ $jurusan_s2 ?? '' }}">
                                </div>
                                <div class="col-4">
                                    <label for="perguruan_tinggi_s2" class="form-label">Perguruan Tinggi</label>
                                    <input type="text" name="perguruan_tinggi_s2" class="form-control"
                                        id="perguruan_tinggi_s2" placeholder="Masukkan perguruan tinggi"
                                        value="{{ $perguruan_tinggi_s2 ?? '' }}">
                                </div>
                                <div class="col-4">
                                    <label for="tahun_s2" class="form-label">Tahun</label>
                                    <input type="number" name="tahun_s2" class="form-control" id="tahun_s2"
                                        min="1900" max="2100" placeholder="Masukkan tahun"
                                        value="{{ $tahun_s2 ?? '' }}">
                                </div>
                            </div>

                            <label class="form-label">Doktor (S3)</label>
                            <div class="row mb-3">
                                <div class="col-4">
                                    <label for="jurusan_s3" class="form-label">Jurusan</label>
                                    <input type="text" name="jurusan_s3" class="form-control" id="jurusan_s3"
                                        placeholder="Masukkan jurusan" value="{{ $jurusan_s3 ?? '' }}">
                                </div>
                                <div class="col-4">
                                    <label for="perguruan_tinggi_s3" class="form-label">Perguruan Tinggi</label>
                                    <input type="text" name="perguruan_tinggi_s3" class="form-control"
                                        id="perguruan_tinggi_s3" placeholder="Masukkan perguruan tinggi"
                                        value="{{ $perguruan_tinggi_s3 ?? '' }}">
                                </div>
                                <div class="col-4">
                                    <label for="tahun_s3" class="form-label">Tahun</label>
                                    <input type="number" name="tahun_s3" class="form-control" id="tahun_s3"
                                        min="1900" max="2100" placeholder="Masukkan tahun"
                                        value="{{ $tahun_s3 ?? '' }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
