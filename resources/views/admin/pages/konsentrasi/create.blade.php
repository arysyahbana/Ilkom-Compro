@extends('admin.layouts.app')

@section('title', 'Create Konsentrasi | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="">Create Konsentrasi</h3>
                    <div class="tab-content mt-3">
                        <form action="{{ route('konsentrasi.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="konsentrasi" class="form-label">Konsentrasi</label>
                                <input type="text" name="konsentrasi" class="form-control" id="konsentrasi">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
