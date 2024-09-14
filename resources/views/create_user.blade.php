<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
</head>
<body>
    <!-- <img src="{{ asset('assets/img/bg1.jpeg') }}" alt="ppulbatu"> -->
    <!-- <h1>Ini Halaman Create User</h1> -->
    <div class="d-flex">
        <div class="form-container">
            <form action="{{ route('user.store') }}" method="POST">
                <label for="nama">Nama: </label>
                <input type="text" name="nama" required>
                <label for="npm">NPM: </label>
                <input type="text" name="npm" required>
                <label for="kelas">Kelas: </label>
                <input type="text" name="kelas" required>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>