@extends('layouts.main')

@section('wrapper')
    <h1 class="m-0">Create New Service</h1>
@endsection

@section('content')
    <div class="col d-flex justify-content-center">
        @if (!$errors->isEmpty())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
        @foreach ($products as $product)
            <form action="{{ route('product.update') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div>
                            <input type="text" name="id" value="{{ $product->id }}" hidden>
                        </div>
                        <div class="form-group">
                            <label for="superiority" class="form-label">Keunggulan</label>
                            <input type="text" name="superiority" id="superiority"
                                class="form-control @error('superiorty') is-invalid @enderror" required autofocus
                                value="{{ $product->superiority }}">
                            @error('superiority')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                name="description">{{ $product->description }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="icon" class="form-label">Icon</label>
                            <input type="text" name="icon" id="icon"
                                class="form-control @error('icon') is-invalid @enderror" required
                                value="{{ $product->icon }}">
                            @error('icon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="d-flex justify-content-center mb-3">
                        <button type="submit" class="btn btn-success">SAVE</button>
                    </div>
                </div>

            </form>
        @endforeach
    </div>
@endsection
