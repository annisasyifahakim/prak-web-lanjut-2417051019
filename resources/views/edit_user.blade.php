<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h2>Edit Data User</h2>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Nama:</label><br>
            <input type="text" name="nama" value="{{ old('nama', $user->name) }}" required>
        </div>
        <br>

        <div>
            <label>NPM:</label><br>
            <input type="text" name="npm" value="{{ old('npm', $user->npm) }}" required>
        </div>
        <br>

        <div>
            <label>Kelas:</label><br>
            <select name="kelas_id" required>
                <option value="">-- Pilih Kelas --</option>
                @foreach ($kelas as $kls)
                    <option value="{{ $kls->id }}" {{ $user->kelas_id == $kls->id ? 'selected' : '' }}>
                        {{ $kls->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>
        <br>

        <button type="submit">Perbarui</button>
        <a href="{{ route('user.index') }}">Batal</a>
    </form>
</body>
</html>