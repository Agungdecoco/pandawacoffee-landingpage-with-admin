@extends('layouts.main')

@section('wrapper')
    <h1 class="m-0">Header</h1>
@endsection

@section('content')
    <div class="col d-flex justify-content-center" width="80%">
        <div class="card d-flex justify-content-center" style="width: 80%">
            <div class="card-body">
                @foreach ($headers as $header)
                    <form action="{{ route('header.update') }}" method="POST">
                        @csrf
                        <div>
                            <input type="text" name="id" value="{{ $header->id }}" hidden>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <div class="col">
                                <div class="form-group">
                                    <label for="title" class="form-label"><b>title</b></label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ $header->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="subtitle" class="form-label"><b>Subtitle</b></label>
                                    <input typle="text" class="form-control form-control-sm" id="subtitle" name="subtitle"
                                        value="{{ $header->subtitle }}">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">SAVE</button>
                        </div>
                    </form>
                @endforeach

            </div>
        </div>
    </div>
@endsection
