<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
      <div class="profile-container text-center">
        <img src="{{ asset('pp1.jpeg') }}" alt="photo profil" class="profile-picture">
        <table class="profile-table table">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
