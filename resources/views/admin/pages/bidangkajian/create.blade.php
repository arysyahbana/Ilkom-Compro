@extends('admin.layouts.app')

@section('title', 'Create Bidang Kajian | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="">Create Bidang Kajian</h3>
                    <div class="tab-content mt-3">
                        <form action="{{ route('bidangkajian.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="bidangkajian" class="form-label">Bidang Kajian</label>
                                <input type="text" name="bidang_kajian" class="form-control" id="bidangkajian">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
