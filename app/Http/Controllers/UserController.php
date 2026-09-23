<?php

namespace App\Http\Controllers;

// DUA BARIS INI WAJIB ADA DI ATAS
use App\Models\Kelas;
use App\Models\UserModel;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = UserModel::with('kelas')->get();
        return view('user_index', ['users' => $users]);
    }

    public function create()
    {
        $kelas = Kelas::all();
        return view('create_user', ['kelas' => $kelas]);
    }

    public function store(Request $request)
    {
        UserModel::create([
            'nama' => $request->nama,
            'npm' => $request->npm,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect('/user');
    }
}