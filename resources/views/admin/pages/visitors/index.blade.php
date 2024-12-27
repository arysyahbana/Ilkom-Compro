@extends('admin.layouts.app')

@section('title', 'Count Visitors | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="d-flex justify-content-between mb-3">
                <h3 style="color: #47245C">Jumlah Pengunjung</h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="tab-content table-responsive">
                        <div class="tab-pane show active" id="basic-datatable-preview">
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr style="background-color: #B92383; color: white; border-radius: 0.5rem">
                                        <th>No</th>
                                        {{-- <th>Ip</th>
                                        <th>Kota</th> --}}
                                        <th>Negara</th>
                                        <th>Jumlah Pengunjung</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($visitors as $visitor)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            {{-- <td>{{ $visitor->ip ?? '' }}</td>
                                            <td>{{ $visitor->city ?? '' }}</td> --}}
                                            <td>{{ $visitor->country ?? '' }}</td>
                                            <td>{{ $visitor->total ?? '' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
