<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Deudas;
use App\Models\User;

class DeudasTableSeeder extends Seeder
{
    public function run()
    {
        // Creamos 99 deudas de prueba con clientes aleatorios
        $clientes = User::all();

        for ($i = 0; $i < 99; $i++) {
            $deuda = new Deudas();
            $deuda->nombre_deudor = 'Deudor #' . ($i+1);
            $deuda->descripcion = 'Descripción de la deuda #' . ($i+1);
            $deuda->monto = rand(100, 10000) / 100;
            $deuda->fecha_vencimiento = date('Y-m-d', strtotime('+30 days'));
            $deuda->cliente_id = $clientes->random()->id;
            $deuda->save();
        }
    }
}
