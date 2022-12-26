@extends('layouts.main')

@section('wrapper')
    <h1 class="m-0">Tambah Keunggulan Produk</h1>
@endsection

@section('content')
    <div class="col d-flex justify-content-center">
        @if (!$errors->isEmpty())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
        <form action="{{ route('product.store') }}" method="post">
            @csrf
            {{-- <div class="col-md-6">
            </div> --}}
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="superiority" class="form-label">Keunggulan</label>
                        <input type="text" name="superiority" id="superiority"
                            class="form-control @error('superiority') is-invalid @enderror" required autofocus
                            value="{{ old('superiority') }}">
                        @error('superiority')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                            name="description"></textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="icon" class="form-label">Icon</label>
                        <input class="form-control @error('icon') is-invalid @enderror" type="text" id="icon" name="icon"
                            required placeholder="Gunakan icon dari boxicon">
                        @error('icon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>
                <!-- /.card-header -->
                <div class="d-flex justify-content-center mb-3">
                    <button type="submit" class="btn btn-success">CREATE SERVICE</button>
                </div>
            </div>
        </form>
    </div>
@endsection
