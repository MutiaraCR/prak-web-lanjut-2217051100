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
                    <th>Foto</th>
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
                            <img src="{{ asset('upload/img/' . $user->foto) }}" alt="User Photo" width="100">
                        </td>
                        <td>
                            <!-- View -->
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-custom btn-sm">View</a>
                            <!-- Edit -->
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <!-- Delete -->
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                            </form>
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
