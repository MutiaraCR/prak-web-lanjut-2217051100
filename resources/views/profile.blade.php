<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-image: url('{{ asset('bg1.jpeg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        color: white;
      }
      .profile-container {
        background-color: rgba(172, 206, 166, 0.8);
        padding: 30px;
        border-radius: 15px;
        height: 50%;
        width: 30%;
        margin: auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      .profile-picture {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
        border: 5px solid white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow around profile picture */
      }
      .profile-table {
        margin: auto;
        text-align: left;
        background-color: white;
        color: black;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
      }
      .profile-table td {
        padding: 10px;
        font-weight: bold;
        font-size: 1.1em;
      }
      .profile-table td:first-child {
        text-align: right;
      }
      .table td {
        padding: 15px 10px;
      }
    </style>
  </head>
  <body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
      <div class="profile-container text-center">
        <img src="{{ asset('pp1.jpeg') }}" alt="photo profil" class="profile-picture">
        <table class="profile-table table">
          <tr>
            <td>Nama</td>
            <td> : </td>
            <td>{{ $nama }}</td>
          </tr>
          <tr>
            <td>Kelas</td>
            <td> : </td>
            <td>{{ $kelas }}</td>
          </tr>
          <tr>
            <td>NPM</td>
            <td> : </td>
            <td>{{ $npm }}</td>
          </tr>
        </table>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
