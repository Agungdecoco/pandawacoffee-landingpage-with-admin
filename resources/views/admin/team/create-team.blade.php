@extends('layouts.main')

@section('wrapper')
    <h1 class="m-0">Add New Team</h1>
@endsection

@section('content')
    <div class="col d-flex justify-content-center" style="width: 150%">
        @if (!$errors->isEmpty())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
        <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                                required autofocus value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="job" class="form-label">Posisi</label>
                            <input type="text" name="job" id="job" class="form-control @error('job') is-invalid @enderror"
                                required autofocus value="{{ old('job') }}">
                            @error('job')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image" class="form-label">Foto</label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                                name="image" required>
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <button type="submit" class="btn btn-success">CREATE TEAM</button>
                    </div>
                </div>
                <!-- /.card-header -->
            </div>

        </form>
    </div>
@endsection
