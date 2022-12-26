@extends('layouts.main')

@section('wrapper')
    <h1 class="m-0">Setting Service</h1>
@endsection

@section('content')
    {{-- <div class="modal fade" id="editServiceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editServiceModal">Edit Layanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col">
                        @if (!$errors->isEmpty())
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        @endif
                        <form action="{{ route('service.update') }}" method="post" enctype="multipart/form-data"
                            id="editForm">
                            @csrf
                            <div class="form-group">
                                <label for="scope" class="form-label">Nama Layanan</label>
                                <input type="text" name="scope" id="scope"
                                    class="form-control @error('scope') is-invalid @enderror" required>
                                @error('scope')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description" class="form-label">Deskripsi Layanan</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                    name="description"></textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">SAVE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('product.create') }}" class="btn btn-success">Create New Service</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="datatable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col" style="width: 50px">#</th>
                            <th class="text-center" scope="col">Icon</th>
                            <th class="text-center" scope="col" width="500px">Keunggulan</th>
                            <th class="text-center" scope="col">Deskripsi</th>
                            <th class="text-center" scope="col" width="200px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="text-center" scope="col">{{ $product->id }}</td>
                                <td class="text-center" scope="col">{{ $product->superiority }}</td>
                                <td class="text-center" scope="col">{{ $product->description }}</td>
                                <td class="text-center" scope="col"><i class="{{ $product->image }}"></i></td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('product.destroy', $product->id) }}" method="POST">
                                        {{-- <button type="button" class="btn btn-primary edit" data-bs-toggle="modal"
                                            data-bs-target="#editServiceModal">Edit</button> --}}
                                        <a class="btn btn-primary edit"
                                            href="{{ route('product.edit', $product->id) }}">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" id="btn" class="btn btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    {{-- <script type="text/javascript">
        $document.ready(function() {
            var table = $('#datatable').DataTable();
            $tr = $('#datatable tbody tr');
            if ($tr.hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);

            $('#scope').val(data[1]);
            $('#description').val(data[2]);
            $('#editForm').attr('action', '{{ route('service.update') }}/' + data[0]);
            $('#editServiceModal').modal('show');
        });
    </script> --}}
@endsection
