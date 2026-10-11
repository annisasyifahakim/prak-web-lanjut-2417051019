<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        $users = $this->userModel->with('kelas')->get();
        return view('user_index', [
            'title' => 'Daftar User',
            'users' => $users
        ]);
    }

    public function create()
    {
        $data = [
            'title' => 'Create User',
            'kelas' => $this->kelasModel->getKelas(),
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'kelas_id' => 'required',
        ]);

        $this->userModel->create([
            'name'     => $request->input('nama'),
            'npm'      => $request->input('npm'),
            'email'    => $request->input('npm') . '_' . time() . '@gmail.com',
            'password' => bcrypt('password123'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->route('user.index')->with('success', 'Data user berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $user = $this->userModel->findOrFail($id);
        $data = [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $this->kelasModel->getKelas(),
        ];

        return view('edit_user', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'kelas_id' => 'required',
        ]);

        $user = $this->userModel->findOrFail($id);
        $user->update([
            'name'     => $request->input('nama'),
            'npm'      => $request->input('npm'),
            'email'    => $request->input('npm') . '_' . time() . '@gmail.com',
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/users')->with('success', 'Data user berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $user = $this->userModel->findOrFail($id);
        $user->delete();

        return redirect()->to('/users')->with('success', 'Data user berhasil dihapus!');
    }
}