<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Models\LevelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\LevelDataTable;

class LevelController extends Controller
{
   
    public function index(LevelDataTable $dataTable)
    {
        return $dataTable->render('level.level');
    }

    public function tambah()
    {
        return view('level.tambah');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'level_kode' => 'required',
            'level_nama' => 'required'
        ]);
    
        KategoriModel::create([
            'level_kode' => $request->level_kode,
            'level_nama' => $request->level_nama
        ]);
    
        return redirect('/level')->with('success', 'Level; berhasil ditambahkan.');
    }
    public function update($id)
    {
        $level = LevelModel::find($id);
        return view('level.update', ['data' => $level]);
    }

    public function update_simpan($id, Request $request)
    {
        $request->validate([
            'kodeLevel' => 'required',
            'namaLevel' => 'required',
        ]);

        $level = LevelModel::findOrFail($id);

        $level->level_kode = $request->kodeLevel;
        $level->level_nama = $request->namaLevel;

        $level->save();
        return redirect('/level')->with('success', 'Level berhasil diperbarui.');
    }
    public function hapus($id)
    {
        $level = LevelModel::find($id);
        $level->delete();

        return redirect('/level');
    }
}