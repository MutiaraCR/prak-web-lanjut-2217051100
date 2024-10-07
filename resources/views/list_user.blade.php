@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Tombol Tambah User -->
    <div class="text-end mb-3">
        <a href="{{ route('users.create') }}" class="btn btn-custom">Tambah User</a>
    </div>

    <!-- Tabel untuk menampilkan list user -->
    <div class="table-responsive">
        <table id="user-table" class="table table-hover">
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
            @if($users && $users->count() > 0)
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->npm }}</td>
                        <td>{{ $user->nama_kelas }}</td>
                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-custom">Detail</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">Tidak ada data user tersedia.</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
