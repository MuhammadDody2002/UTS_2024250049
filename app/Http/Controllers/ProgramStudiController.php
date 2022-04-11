<?php

namespace App\Http\Controllers;

use App\Models\FakultasModel;
use App\Models\ProgramStudiModel;
use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
    public function index() {
        $prodi = ProgramStudiModel::all();
        return view('program_studi.index', compact('prodi'));
    }

    public function detail($id = null) {
        $prodi = ProgramStudiModel::find($id);
        $fakultas = FakultasModel::find($prodi->id_fakultas);
        return view('program_studi.detail', compact('prodi', 'fakultas'));
    }
}
