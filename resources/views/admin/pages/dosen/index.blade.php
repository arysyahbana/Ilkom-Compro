@extends('admin.layouts.app')

@section('title', 'Dosen | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="">Dosen</h3>

                    <a href="{{ route('dosen.create') }}" class="btn btn-sm btn-success my-3">Add</a>
                    <div class="tab-content table-responsive">
                        <div class="tab-pane show active" id="basic-datatable-preview">
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>NIDN</th>
                                        <th>Tempat/Tanggal Lahir</th>
                                        <th>Pangkat/Golongan</th>
                                        <th>Jabatan</th>
                                        <th>Konsentrasi</th>
                                        {{-- <th>Bidang Kajian</th>
                                        <th>Alamat Instansi</th>
                                        <th>Telpon/Fax</th>
                                        <th>Email</th>
                                        <th>S1</th>
                                        <th>S2</th>
                                        <th>S3</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama ?? '' }}</td>
                                            <td>{{ $item->nip ?? '' }}</td>
                                            <td>{{ $item->nidn ?? '' }}</td>
                                            <td>{{ $item->tempat_lahir ?? '' }} /
                                                {{ \Carbon\Carbon::parse($item->tanggal_lahir ?? '')->locale('id')->translatedFormat('d F Y') }}
                                            </td>
                                            <td>{{ $item->rPangkat->pangkat ?? '' }} /
                                                {{ $item->rGolongan->golongan ?? '' }}</td>
                                            <td>{{ $item->rJabatan->jabatan ?? '' }}</td>
                                            <td>{{ $item->rKonsentrasi->konsentrasi ?? '' }}</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-secondary" data-bs-toggle="modal"
                                                    data-bs-target="#detaildosen{{ $item->id }}">Detail</a>
                                                <a href="{{ route('dosen.edit', $item->id) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>
                                                <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#hapusdosen{{ $item->id }}">Hapus</a>
                                            </td>
                                        </tr>

                                        <!-- Modal Detail Dosen -->
                                        <div class="modal fade" id="detaildosen{{ $item->id }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="detaildosenLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="detaildosenLabel">Detail Data Dosen
                                                            {{ $item->nama ?? '' }}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-column gap-3">
                                                            <div class="d-flex">
                                                                <span class="fw-bold col-3">Nama</span>
                                                                <span>:</span>
                                                                <span class="ps-2">{{ $item->nama ?? '' }}</span>
                                                            </div>
                                                            <div class="d-flex">
                                                                <span class="fw-bold col-3">NIP</span>
                                                                <span>:</span>
                                                                <span class="ps-2">{{ $item->nip ?? '' }}</span>
                                                            </div>
                                                            <div class="d-flex">
                                                                <span class="fw-bold col-3">NIDN</span>
                                                                <span>:</span>
                                                                <span class="ps-2">{{ $item->nidn ?? '' }}</span>
                                                            </div>
                                                            <div class="d-flex">
                                                                <span class="fw-bold col-3">TTL</span>
                                                                <span>:</span>
                                                                <span class="ps-2">
                                                                    {{ $item->tempat_lahir ?? '' }} /
                                                                    {{ \Carbon\Carbon::parse($item->tanggal_lahir ?? '')->locale('id')->translatedFormat('d F Y') }}
                                                                </span>
                                                            </div>
                                                            <div class="d-flex">
                                                                <span class="fw-bold col-3">Pangkat / Gol</span>
                                                                <span>:</span>
                                                                <span class="ps-2">
                                                                    {{ $item->rPangkat->pangkat ?? '' }} /
                                                                    {{ $item->rGolongan->golongan ?? '' }}
                                                                </span>
                                                            </div>
                                                            <div class="d-flex">
                                                                <span class="fw-bold col-3">Jabatan</span>
                                                                <span>:</span>
                                                                <span
                                                                    class="ps-2">{{ $item->rJabatan->jabatan ?? '' }}</span>
                                                            </div>
                                                            <div class="d-flex">
                                                                <span class="fw-bold col-3">Konsentrasi</span>
                                                                <span>:</span>
                                                                <span
                                                                    class="ps-2">{{ $item->rKonsentrasi->konsentrasi ?? '' }}</span>
                                                            </div>
                                                            <div class="d-flex">
                                                                <span class="fw-bold col-3">Bidang Kajian</span>
                                                                <span>:</span>
                                                                <span>
                                                                    <ul>
                                                                        @foreach ($item->rBidangKajian as $bk)
                                                                            <li>
                                                                                {{ $bk->bidang_kajian ?? '' }}
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </span>
                                                            </div>
                                                            <div class="d-flex">
                                                                <span class="fw-bold col-3">Alamat Instansi</span>
                                                                <span>:</span>
                                                                <span
                                                                    class="ps-2">{{ $item->alamat_instansi ?? '' }}</span>
                                                            </div>
                                                            <div class="d-flex">
                                                                <span class="fw-bold col-3">Telepon / Fax</span>
                                                                <span>:</span>
                                                                <span class="ps-2">
                                                                    {{ $item->telpon ?? '' }} /
                                                                    {{ $item->fax ?? '' }}
                                                                </span>
                                                            </div>
                                                            <div class="d-flex">
                                                                <span class="fw-bold col-3">Email</span>
                                                                <span>:</span>
                                                                <span class="ps-2">{{ $item->email ?? '' }}</span>
                                                            </div>
                                                            <div class="d-flex">
                                                                <span class="fw-bold col-3">Sarjana (S1)</span>
                                                                <span>:</span>
                                                                <span class="ps-2">{{ $item->s1 ?? '' }}</span>
                                                            </div>
                                                            <div class="d-flex">
                                                                <span class="fw-bold col-3">Magister (S2)</span>
                                                                <span>:</span>
                                                                <span class="ps-2">{{ $item->s2 ?? '' }}</span>
                                                            </div>
                                                            <div class="d-flex">
                                                                <span class="fw-bold col-3">Doktor (S3)</span>
                                                                <span>:</span>
                                                                <span class="ps-2">{{ $item->s3 ?? '' }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-danger"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Hapus Dosen -->
                                        <div class="modal fade" id="hapusdosen{{ $item->id }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="hapusdosenLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="hapusdosenLabel">Hapus
                                                            Data
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <img src="{{ asset('dist/images/bin.gif') }}" alt=""
                                                            class="img-fluid w-25">
                                                        <p>apa anda yakin ingin menghapus data?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('dosen.destroy', $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-sm btn-danger">Hapus</button>
                                                        </form>
                                                        <button type="button" class="btn btn-sm btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end preview-->
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
