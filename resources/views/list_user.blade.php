@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Tombol Tambah User -->
    <div class="text-end mb-3">
        <a href="{{ route('user.create') }}" class="btn btn-custom">Tambah User</a>
    </div>

    <!-- Tabel untuk menampilkan list user -->
    <div class="container text-center">
        <table class="table table-container">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['nama'] }}</td>
                    <td>{{ $user['npm'] }}</td>
                    <td>{{ $user['nama_kelas'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
