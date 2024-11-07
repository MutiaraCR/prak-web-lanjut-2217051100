@extends('layouts.app')

@section('content')
<div class="d-flex">
    <div class="form-container">
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="nama">Nama: </label>
            <input type="text" id="nama" name="nama">
            @foreach($errors->get('nama') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach

            <!-- <label for="npm">NPM: </label>
            <input type="text" id="npm" name="npm">
            @foreach($errors->get('npm') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach -->

            <label for="kelas_id">Kelas: </label>
            <select name="kelas_id" id="kelas_id">
                <option value=""></option>
                @foreach($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>
            @foreach($errors->get('kelas_id') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach

            <label for="jurusan">Jurusan: </label>
            <select name="jurusan" id="jurusan" required>
                <option value=""></option>
                <option value="fisika">Fisika</option>
                <option value="kimia">Kimia</option>
                <option value="biologi">Biologi</option>
                <option value="matematika">Matematika</option>
                <option value="ilmu komputer">Ilmu Komputer</option>
            </select>
            @foreach($errors->get('jurusan') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach

            <label for="semester">Semester: </label>
            <input type="number" id="semester" name="semester" min="1" max="14" value="{{ old('semester') }}">
            @foreach($errors->get('semester') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach

            <label for="fakultas_id">Fakultas: </label>
            <select name="fakultas_id" id="fakultas_id" required>
                <option value=""></option>
                @foreach($fakultas as $fakultasItem)
                    <option value="{{ $fakultasItem->id }}">{{ $fakultasItem->nama_fakultas }}</option>
                @endforeach
            </select>
            @foreach($errors->get('fakultas_id') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach

            <label for="foto">Foto: </label>
            <input type="file" id="foto" name="foto"><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection