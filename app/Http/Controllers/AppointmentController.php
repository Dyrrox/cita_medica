<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function index()
    {
        if (session('cargo') != 1) {
            return redirect('/login');
        }

        // Listar citas para la tabla principal
        $appointments = DB::table('appointment as a')
            ->join('customers as c', 'a.codpaci', '=', 'c.codpaci')
            ->join('doctor as d', 'a.coddoc', '=', 'd.coddoc')
            ->join('specialty as s', 'a.codespe', '=', 's.codespe')
            ->select('a.codcit', 'a.dates', 'a.hour', 'c.nombrep', 'd.apedoc', 's.nombrees', 'a.estado')
            ->get();

        $dato = [$appointments];

        // Obtener listas para los select del Modal
        $customers = DB::table('customers')->get();
        $doctors = DB::table('doctor')->get();
        $specialties = DB::table('specialty')->get();

        return view('appointment', compact('dato', 'customers', 'doctors', 'specialties'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'dates' => 'required|date',
            'hour' => 'required',
            'codpaci' => 'required',
            'coddoc' => 'required',
            'codespe' => 'required',
        ]);

        // Insertar nueva cita con estado por defecto '0' (Pendiente)
        DB::table('appointment')->insert([
            'dates' => $request->dates,
            'hour' => $request->hour,
            'codpaci' => $request->codpaci,
            'coddoc' => $request->coddoc,
            'codespe' => $request->codespe,
            'estado' => '0',
            'fecha_create' => now(),
        ]);

        return redirect('/appointments')->with('success', 'Agregado correctamente');
    }

    public function destroy($id)
    {
        if (session('cargo') != 1) {
            return redirect('/login');
        }

        DB::table('appointment')->where('codcit', $id)->delete();

        return redirect('/appointments')->with('success', 'Registro eliminado correctamente');
    }

    public function toggleStatus($id)
    {
        if (session('cargo') != 1) {
            return redirect('/login');
        }

        $appointment = DB::table('appointment')->where('codcit', $id)->first();

        if ($appointment) {
            $nuevoEstado = $appointment->estado == 1 ? 0 : 1;

            DB::table('appointment')->where('codcit', $id)->update([
                'estado' => $nuevoEstado
            ]);
        }

        return redirect('/appointments')->with('success', 'Estado de la cita actualizado');
    }
}