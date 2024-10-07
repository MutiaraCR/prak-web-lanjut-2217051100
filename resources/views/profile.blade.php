@extends('layouts.app')

@section('content')
  <div id="profile-view" class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div id="profile-container" class="profile-container text-center">
      <img src="{{ asset('upload/img/' . $user->foto) }}" alt="photo profil" class="profile-picture img-fluid mb-4">
      <table id="profile-table" class="table">
        <tr>
          <td>Nama</td>
          <td> : </td>
          <td>{{ $user->nama }}</td>
        </tr>
        <tr>
          <td>NPM</td>
          <td> : </td>
          <td>{{ $user->npm }}</td>
        </tr>
        <tr>
          <td>Kelas</td>
          <td> : </td>
          <td>{{ $user->nama_kelas ?? 'Kelas tidak ditemukan' }}</td>
        </tr>
      </table>
    </div>
  </div>
@endsection
