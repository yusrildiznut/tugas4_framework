<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index (){
        $matakuliahs = MataKuliah::get();
        return view('matakuliah.index', ['matakuliahs' => $matakuliahs]);
    }
}
