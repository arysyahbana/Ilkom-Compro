@extends('admin.layouts.app')

@section('title', 'Create Pangkat | SIMT')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="">Create Pangkat</h3>
                    <div class="tab-content mt-3">
                        <form action="{{ route('pangkat.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="pangkat" class="form-label">Pangkat</label>
                                <input type="text" name="pangkat" class="form-control" id="pangkat">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
