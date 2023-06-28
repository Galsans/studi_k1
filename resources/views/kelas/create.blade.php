@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Data Kelas
                            <a href="{{ route('kelas.index') }}" class="btn btn-info float-end">GO BACK</a>
                        </h3>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('kelas.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Kelas</label>
                                <input type="text" name="kelas" class="form-control"
                                    placeholder="Masukkan Nama Kelas..." required>
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="dkr" placeholder="masukkan deskripsi kelas..."
                                    required rows="3"></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <button class="btn btn-primary" type="submit">SEND</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
