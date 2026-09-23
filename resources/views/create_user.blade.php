<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    <h2>Tambah Data User</h2>
    <form action="/user/store" method="POST">
        @csrf
        <div>
            <label for="nama">Nama:</label><br>
            <input type="text" name="nama" id="nama" required>
        </div>
        <br>
        <div>
            <label for="npm">NPM:</label><br>
            <input type="text" name="npm" id="npm" required>
        </div>
        <br>
        <div>
            <label for="kelas_id">Kelas:</label><br>
            <select name="kelas_id" id="kelas_id" required>
                @foreach ($kelas as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>