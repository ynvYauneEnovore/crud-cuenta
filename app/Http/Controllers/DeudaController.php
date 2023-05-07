<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deudas;

class DeudaController extends Controller
{
    public function index()
    {
        $deudas = Deudas::paginate(8); // 8 deudas por página
        return view('deudas.index', compact('deudas'));
    }
}
