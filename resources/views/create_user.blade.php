@extends('layouts.app')

@section('content')
<div class="d-flex">
    <div class="form-container">
    <form action="{{ route('user.store') }}" method="POST" style="background-color: rgba(172, 206, 166, 0.8); padding: 30px; border-radius: 15px;">
            @csrf

            <label for="nama">Nama: </label>
            <input type="text" id="nama" name="nama">
            @foreach($errors->get('nama') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach

            <label for="npm">NPM: </label>
            <input type="text" id="npm" name="npm">
            @foreach($errors->get('npm') as $msg)
                <p class="text-danger">{{ $msg }}</p>
            @endforeach

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

            <button type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection
