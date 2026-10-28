<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function showLogin() {
        return view('welcome');
    }

    // Procesa el inicio de sesión
    function login(Request $request) {
        $request->validate([
            'usuario' => 'required',
            'clave' => 'required',
        ], [
            'usuario.required' => 'Digite su usuario',
            'clave.required' => 'Digite su contraseña',
        ]);

        $usuario = $request->input('usuario');
        $clave = $request->input('clave');

        try {
            // Equivalente exacto de tu consulta SQL original con UNION
            $data = DB::selectOne(
            'SELECT id, nombre, usuario, email, clave, cargo FROM usuarios WHERE usuario = ? 
            UNION 
            SELECT codpaci as id, nombrep as nombre, apellidop as email, usuario, clave, cargo FROM customers WHERE usuario = ?',
            [$usuario, $usuario]
        );

            if (!$data) {
                return back()->withErrors(['usuario' => "Usuario $usuario no encontrado."])->withInput();
            }

            // Nota: Si tus contraseñas están en texto plano como en tu código anterior:
            if ($clave === $data->clave) {
                
                // Guardamos los datos en la sesión de Laravel
                Session::put([
                    'id' => $data->id,
                    'nombre' => $data->nombre,
                    'usuario' => $data->usuario,
                    'email' => $data->email,
                    'cargo' => $data->cargo
                ]);

                // Redirección según el cargo
                if ($data->cargo == 1) {
                    return redirect('/admin/dashboard');
                } elseif ($data->cargo == 2) {
                    return redirect()->to('view/user/user.php');
                }
            } else {
                return back()->withErrors(['usuario' => 'Contraseña incorrecta.'])->withInput();
            }

        } catch (\Exception $e) {
            return back()->withErrors(['usuario' => $e->getMessage()])->withInput();
        }
    }
}