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
                @csrf
                <label for="nama">Nama: </label>
                <input type="text" name="nama">
                @foreach($errors->get('nama') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                @endforeach

                <label for="npm">NPM: </label>
                <input type="text" name="npm">
                @foreach($errors->get('npm') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                @endforeach

                <label for="id_kelas">Kelas: </label>
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
</body>
</html>