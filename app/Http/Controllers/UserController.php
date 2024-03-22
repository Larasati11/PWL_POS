<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\DataTables\UserDataTable;


class UserController extends Controller
{
    /*public function index()
    {
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }*/
    public function tambah()
    {
        return view('user.user_tambah');
    }


    public function store(Request $request): RedirectResponse
{
    $validated = $request->validate([
        'username' => 'required',
        'nama' => 'required',
        'password' => 'required',
        'level_id' => 'required'
    ]);

    UserModel::create([
        'username' => $request->username,
        'nama' => $request->nama,
        'password' => Hash::make($request->password,),
        'level_id' =>$request->level_id
    ]);

    return redirect('/user')->with('success', 'User berhasil ditambahkan.');
}

    public function ubah($id)
    {

        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }
    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->level_id = $request->level_id; // Sesuaikan dengan input dari form

       

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();
        return redirect('/user');
    }
    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('user.user');
    }

}

