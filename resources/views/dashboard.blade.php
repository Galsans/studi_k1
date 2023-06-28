@extends('frontend.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>ANDA MASUK SEBAGAI ADMIN</h3>
                        <h4>Landing Page Admin</h4>
                    </div>
                    <div class="nav">
                        <ul class="nav_ul">
                            <li><a href="{{ route('kelas.index') }}">Kelas</a></li>
                            <li><a href="{{ route('siswa.index') }}">Siswa</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
