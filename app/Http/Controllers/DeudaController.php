<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeudaController extends Controller
{
    public function index()
    {
        $deudas = Deuda::all();

        return view('dashboard.deudas.index', compact('deudas'));
    }

    public function create()
    {
        return view('dashboard.deudas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_deudor' => 'required',
            'descripcion' => 'required',
            'monto' => 'required|numeric',
            'fecha_vencimiento' => 'required|date',
        ]);

        $deuda = new Deuda([
            'nombre_deudor' => $request->get('nombre_deudor'),
            'descripcion' => $request->get('descripcion'),
            'monto' => $request->get('monto'),
            'fecha_vencimiento' => $request->get('fecha_vencimiento'),
            'cliente_id' => $request->get('cliente_id'),
        ]);

        $deuda->save();

        return redirect()->route('deudas.index')
            ->with('success', 'Deuda creada satisfactoriamente.');
    }

    public function edit(Deuda $deuda)
    {
        return view('dashboard.deudas.edit', compact('deuda'));
    }

    public function update(Request $request, Deuda $deuda)
    {
        $request->validate([
            'nombre_deudor' => 'required',
            'descripcion' => 'required',
            'monto' => 'required|numeric',
            'fecha_vencimiento' => 'required|date',
        ]);

        $deuda->update([
            'nombre_deudor' => $request->get('nombre_deudor'),
            'descripcion' => $request->get('descripcion'),
            'monto' => $request->get('monto'),
            'fecha_vencimiento' => $request->get('fecha_vencimiento'),
            'cliente_id' => $request->get('cliente_id'),
        ]);

        return redirect()->route('deudas.index')
            ->with('success', 'Deuda actualizada satisfactoriamente.');
    }

    public function destroy(Deuda $deuda)
    {
        $deuda->delete();

        return redirect()->route('deudas.index')
            ->with('success', 'Deuda eliminada satisfactoriamente.');
    }
}
