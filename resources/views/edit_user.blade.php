@extends('layouts.app')

@section('content')
<div class="d-flex">
    <div class="form-container">
        <form action="{{ route('users.update',  $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="nama">Nama: </label>
            <input type="text" id="nama" name="nama" value="{{ old('nama', $user->nama) }}">
            @foreach($errors->get('nama') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach

            <!-- <label for="npm">NPM: </label>
            <input type="text" id="npm" name="npm" value="{{ old('npm', $user->npm) }}">
            @foreach($errors->get('npm') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach -->

            <label for="kelas_id">Kelas: </label>
            <select name="kelas_id" id="kelas_id" required>
                <option value=""></option>
                @foreach($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                    {{ $kelasItem->nama_kelas }}
                    </option>
                @endforeach
            </select>
            @foreach($errors->get('kelas_id') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach

            <label for="jurusan">Jurusan: </label>
            <select name="jurusan" id="jurusan" required>
                <option value=""></option>
                <option value="fisika" {{ $user->jurusan == 'fisika' ? 'selected' : '' }}>Fisika</option>
                <option value="kimia" {{ $user->jurusan == 'kimia' ? 'selected' : '' }}>Kimia</option>
                <option value="biologi" {{ $user->jurusan == 'biologi' ? 'selected' : '' }}>Biologi</option>
                <option value="matematika" {{ $user->jurusan == 'matematika' ? 'selected' : '' }}>Matematika</option>
                <option value="ilmu komputer" {{ $user->jurusan == 'ilmu komputer' ? 'selected' : '' }}>Ilmu Komputer</option>
            </select>
            @foreach($errors->get('jurusan') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach

            <label for="semester">Semester: </label>
            <input type="number" id="semester" name="semester" min="1" max="14" value="{{ old('semester', $user->semester) }}">
            @foreach($errors->get('semester') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach

            <label for="fakultas_id">Fakultas: </label>
            <select name="fakultas_id" id="fakultas_id" required>
                <option value=""></option>
                @foreach($fakultas as $fakultasItem)
                    <option value="{{ $fakultasItem->id }}" {{ $fakultasItem->id == $user->fakultas_id ? 'selected' : '' }}>
                        {{ $fakultasItem->nama_fakultas }}
                    </option>
                @endforeach
            </select>
            @foreach($errors->get('fakultas_id') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach

            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" id="foto" name="foto" class="form-control">
                @if($user->foto)
                    <img src="{{ asset('storage/uploads/' . $user->foto) }}" alt="User Photo" width="100" class="mt-2">
                @endif
            </div><br>
            <button type="submit">Update</button>
        </form>
    </div>
</div>
@endsection