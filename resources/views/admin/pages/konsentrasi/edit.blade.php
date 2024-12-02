@extends('admin.layouts.app')

@section('title', 'Edit Konsentrasi | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="">Edit Konsentrasi</h3>
                    <div class="tab-content mt-3">
                        <form action="{{ route('konsentrasi.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="konsentrasi" class="form-label">Konsentrasi</label>
                                <input type="text" name="konsentrasi" class="form-control" id="konsentrasi"
                                    value="{{ $item->konsentrasi ?? '' }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
