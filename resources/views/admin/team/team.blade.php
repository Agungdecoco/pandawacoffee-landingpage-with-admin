@extends('layouts.main')

@section('wrapper')
    <h1 class="m-0">Teams</h1>
@endsection

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('team.create') }}" class="btn btn-success">Add New Team</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col" style="width: 50px">#</th>
                            <th class="text-center" scope="col">Name</th>
                            <th class="text-center" scope="col">Job</th>
                            <th class="text-center" scope="col">Photo</th>
                            <th class="text-center" scope="col" width="200px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $num = 1;
                        @endphp
                        @foreach ($teams as $team)
                            <tr>
                                <td class="text-center" scope="col">{{ $team->id }}</td>
                                <td class="text-center" scope="col">{{ $team->name }}</td>
                                <td class="text-center" scope="col">{{ $team->job }}</td>
                                <td class="text-center" scope="col">
                                    <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}"
                                        width="100">
                                </td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('team.destroy', $team->id) }}" method="POST">
                                        {{-- <a class="btn btn-sm" style="background-color: #1C1A30; color: #FDE4D0"
                                            scope="col" href="{{ route('post.edit', $team->id) }}">EDIT</a>~ --}}
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" id="btn" class="btn btn-sm"
                                            style="background-color: #DCD6F7">HAPUS</button>
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
@endsection
