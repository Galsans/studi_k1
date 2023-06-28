@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Table Kelas</h3>
                        <a href="{{ route('dashboard') }}" class="btn btn-primary">Go Back</a>
                        <a href="{{ route('kelas.create') }}" class="btn btn-success">ADD</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kelas</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($kelas as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->kelas }}</td>
                                            <td>{{ $item->dkr }}</td>
                                            <td>
                                                <form action="{{ route('kelas.destroy', $item->id) }}" method="POST"
                                                    class="d-flex gap-3"
                                                    onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')">
                                                    @csrf
                                                    <a href="{{ route('kelas.edit', $item->id) }}"
                                                        class="btn btn-primary">EDIT</a>
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">REMOVE</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">KELAS BELUM ADA</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
