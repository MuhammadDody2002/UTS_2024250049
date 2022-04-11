<?php

namespace App\Http\Controllers;

use App\Models\MataKuliahModel;
use App\Models\ProgramStudiModel;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    //
    public function index() {
        $mata_kuliah = MataKuliahModel::all();
        return view('mata_kuliah.index', compact('mata_kuliah'));
    }

    public function detail($id = null) {
        $mata_kuliah = MataKuliahModel::find($id);
        $prodi = ProgramStudiModel::find($mata_kuliah->id_prodi);
        return view('mata_kuliah.detail', compact('mata_kuliah', 'prodi'));
    }
}
