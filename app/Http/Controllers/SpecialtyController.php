<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpecialtyController extends Controller
{
    public function index()
    {
        if (session('cargo') != 1) {
            return redirect('/login');
        }

        $specialties = DB::table('specialty')->get();

        return view('specialties', compact('specialties'));
    }

    public function store(Request $request)
    {
        if (session('cargo') != 1) {
            return redirect('/login');
        }

        $request->validate([
            'nombrees' => 'required|max:100',
        ]);

        
        $exists = DB::table('specialty')
            ->where('nombrees', $request->nombrees)
            ->exists();

        if ($exists) {
            return redirect('/specialties')->with('error', 'Ya existe esta área médica!');
        }

        DB::table('specialty')->insert([
            'nombrees' => $request->nombrees,
            'fecha_create' => now(),
        ]);

        return redirect('/specialties')->with('success', 'Área médica agregada correctamente');
    }

    public function update(Request $request, $id)
    {
        if (session('cargo') != 1) {
            return redirect('/login');
        }

        $request->validate([
            'nombrees' => 'required|max:100',
        ]);

        DB::table('specialty')->where('codespe', $id)->update([
            'nombrees' => $request->nombrees,
        ]);

        return redirect('/specialties')->with('success', 'Área médica actualizada correctamente');
    }

    public function destroy($id)
    {
        if (session('cargo') != 1) {
            return redirect('/login');
        }

        try {
            DB::table('specialty')->where('codespe', $id)->delete();
            return redirect('/specialties')->with('success', 'Área médica eliminada correctamente');
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect('/specialties')->with('error', 'No se puede eliminar el área médica porque existen médicos asignados a ella.');
            }

            return redirect('/specialties')->with('error', 'Ocurrió un error al intentar eliminar el registro.');
        }
    }
}