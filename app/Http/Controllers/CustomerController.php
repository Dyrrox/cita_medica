<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        if (session('cargo') != 1) {
            return redirect('/login');
        }

        $customers = DB::table('customers')->get();

        return view('customers', compact('customers'));
    }

    public function store(Request $request)
    {
        if (session('cargo') != 1) {
            return redirect('/login');
        }

        $request->validate([
            'dnipa' => 'required',
            'nombrep' => 'required',
            'apellidop' => 'required',
            'seguro' => 'required',
            'tele' => 'required',
            'sexo' => 'required',
            'usuario' => 'required',
            'clave' => 'required',
        ]);

        $exists = DB::table('customers')
            ->where('dnipa', $request->dnipa)
            ->orWhere('usuario', $request->usuario)
            ->orWhere('tele', $request->tele)
            ->exists();

        if ($exists) {
            return redirect('/customers')->with('error', 'Ya existe el registro a agregar!');
        }

        DB::table('customers')->insert([
            'dnipa' => $request->dnipa,
            'nombrep' => $request->nombrep,
            'apellidop' => $request->apellidop,
            'seguro' => $request->seguro,
            'tele' => $request->tele,
            'sexo' => $request->sexo,
            'usuario' => $request->usuario,
            'clave' => $request->clave,
            'cargo' => 2,
            'estado' => 1,
            'fecha_create' => now(),
        ]);

        return redirect('/customers')->with('success', 'Agregado correctamente');
    }

    public function update(Request $request, $id)
    {
        if (session('cargo') != 1) {
            return redirect('/login');
        }

        $request->validate([
            'dnipa' => 'required|max:8',
            'nombrep' => 'required',
            'apellidop' => 'required',
            'seguro' => 'required',
            'tele' => 'required',
            'sexo' => 'required',
            'usuario' => 'required',
        ]);

        DB::table('customers')->where('codpaci', $id)->update([
            'dnipa' => $request->dnipa,
            'nombrep' => $request->nombrep,
            'apellidop' => $request->apellidop,
            'seguro' => $request->seguro,
            'tele' => $request->tele,
            'sexo' => $request->sexo,
            'usuario' => $request->usuario,
        ]);

        return redirect('/customers')->with('success', 'Paciente actualizado correctamente');
    }

    public function destroy($id)
    {
        if (session('cargo') != 1) {
            return redirect('/login');
        }

        try {
            DB::table('customers')->where('codpaci', $id)->delete();
            return redirect('/customers')->with('success', 'Paciente eliminado correctamente');
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->getCode() == '23000') {
                return redirect('/customers')->with('error', 'No se puede eliminar el paciente porque tiene citas médicas registradas.');
            }

            return redirect('/customers')->with('error', 'Ocurrió un error al intentar eliminar el registro.');
        }
    }
}
