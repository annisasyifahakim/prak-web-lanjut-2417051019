@extends('layouts.app')

@section('content')
@if(session('success'))
    <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
        {{ session('success') }}
    </div>
@endif

<div class="container">
    <h1>Daftar User</h1>
    <a href="{{ route('user.create') }}">Tambah User Baru</a><br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <td>ID</td>
                <td>NAMA</td>
                <td>EMAIL</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('user.edit', $user->id) }}">Edit</a> |
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus user ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection