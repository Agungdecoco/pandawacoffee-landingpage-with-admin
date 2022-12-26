@extends('layouts.main')

@section('wrapper')
    <h1 class="m-0">Profile</h1>
@endsection

@section('content')
    <div class="col d-flex justify-content-center" width="80%">
        <div class="card d-flex justify-content-center" style="width: 80%">
            <div class="card-body">
                @foreach ($profiles as $profile)
                    <form action="{{ route('profile.store') }}" method="POST">
                        @csrf
                        <div>
                            <input type="text" name="id" value="{{ $profile->id }}" hidden>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name" class="form-label"><b>Nama Perusahaan</b></label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $profile->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label"><b>Email</b></label>
                                    <input typle="email" class="form-control form-control-sm" id="email" name="email"
                                        value="{{ $profile->email }}">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="phone" class="form-label"><b>Telepon</b></label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        value="{{ $profile->phone }}">
                                </div>
                                <div class="form-group">
                                    <label for="address" class="form-label"><b>Alamat</b></label>
                                    {{-- <textarea class="form-control" id="address" name="address" value="{{ $profile->address }}"></textarea> --}}
                                    <input type="textarea" class="form-control" id="address" name="address"
                                        value="{{ $profile->address }}">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description" class="form-label"><b>Deskripsi Perusahaan</b></label>
                                    {{-- <input type="textarea" class="form-control" id="description" name="description"
                                        value="{{ $profile->description }}"> --}}
                                    <textarea class="form-control" id="description" name="description" rows="3">{{ $profile->description }}</textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="productdesc" class="form-label"><b>Deskripsi Produk</b></label>
                                    {{-- <input type="textarea" class="form-control" id="productdesc" name="productdesc"
                                        value="{{ $profile->productdesc }}" rows="3"> --}}
                                    <textarea class="form-control" id="productdesc" name="productdesc" rows="3">{{ $profile->productdesc }}</textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="facebook" class="form-label"><b>Facebook</b></label>
                                    <input type="text" class="form-control" id="facebook" name="facebook"
                                        value="{{ $profile->facebook }}">
                                </div>
                                <div class="form-group">
                                    <label for="instagram" class="form-label"><b>Instagram</b></label>
                                    <input type="text" class="form-control" id="instagram" name="instagram"
                                        value="{{ $profile->instagram }}">
                                </div>
                                <div class="form-group">
                                    <label for="linkedin" class="form-label"><b>LinkedIn</b></label>
                                    <input type="text" class="form-control" id="linkedin" name="linkedin"
                                        value="{{ $profile->linkedin }}">
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
