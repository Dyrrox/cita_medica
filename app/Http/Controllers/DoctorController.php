<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function index()
    {
        if (session('cargo') != 1) {
            return redirect('/login');
        }

        // Listar médicos haciendo join con especialidades
        $doctors = DB::table('doctor as d')
            ->join('specialty as s', 'd.codespe', '=', 's.codespe')
            ->select('d.*', 's.nombrees')
            ->get();

        $dato = [$doctors];

        // Obtener especialidades para los selects de los modales
        $specialties = DB::table('specialty')->get();

        return view('doctors', compact('dato', 'specialties'));
    }

    public function store(Request $request)
    {
        if (session('cargo') != 1) {
            return redirect('/login');
        }

        // Validar si ya existe el doctor por DNI o teléfono
        $exists = DB::table('doctor')
            ->where('dnidoc', $request->dnidoc)
            ->orWhere('telefo', $request->telefo)
            ->exists();

        if ($exists) {
            return redirect('/doctors')->with('error', 'Ya existe el registro a agregar!');
        }

        DB::table('doctor')->insert([
            'dnidoc' => $request->dnidoc,
            'nomdoc' => $request->nomdoc,
            'apedoc' => $request->apedoc,
            'codespe' => $request->codespe,
            'sexo' => $request->sexo,
            'telefo' => $request->telefo,
            'fechanaci' => $request->fechanaci,
            'correo' => $request->correo ?? '',
            'naciona' => $request->naciona,
            'estado' => 1,
            'fecha_create' => now(),
        ]);

        return redirect('/doctors')->with('success', 'Agregado correctamente');
    }

    public function update(Request $request, $id)
    {
        if (session('cargo') != 1) {
            return redirect('/login');
        }

        DB::table('doctor')->where('coddoc', $id)->update([
            'dnidoc' => $request->dnidoc,
            'nomdoc' => $request->nomdoc,
            'apedoc' => $request->apedoc,
            'codespe' => $request->codespe,
            'sexo' => $request->sexo,
            'telefo' => $request->telefo,
            'fechanaci' => $request->fechanaci,
            'correo' => $request->correo ?? '',
            'naciona' => $request->naciona,
        ]);

        return redirect('/doctors')->with('success', 'Médico actualizado correctamente');
    }
    
    public function destroy($id)
    {
        if (session('cargo') != 1) {
            return redirect('/login');
        }

        try {
            DB::table('doctor')->where('coddoc', $id)->delete();
            return redirect('/doctors')->with('success', 'Médico eliminado correctamente');
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect('/doctors')->with('error', 'No se puede eliminar el médico porque tiene citas registradas asociadas.');
            }

            return redirect('/doctors')->with('error', 'Ocurrió un error al intentar eliminar el registro.');
        }
    }
}