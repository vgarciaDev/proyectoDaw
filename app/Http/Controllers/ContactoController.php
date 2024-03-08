<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index() {
        return view('contacto');
    }
    public function sendEmailFn(Request $request)
    {
       try {
        $nombre= $request->form['nombre'];
        $apellidos = $request->form['apellidos'];
        $telefono = $request->form['telefono'];
        $email = $request->form['email'];
        $selector = $request->form['opciones'];
        $mensaje = $request->form['mensaje'];
        // Aquí puedes personalizar el contenido del correo electrónico
        $contenido = "Nombre: $nombre\nApellidos: $apellidos\nTelefono: $telefono\nEmail: $email\nSelector: $selector\nMensaje: $mensaje";
        
        // Envía el correo electrónico
        Mail::raw($contenido, function ($message) use ($email) {
            $message->to('royaltekh@gmail.com')
                    ->subject('Nuevo mensaje del formulario de contacto');
        });

        return response()->json(["status" => "OK"]);
       } catch(\Exception $e){
        return response()->json(["error" => $e->getMessage()], 500);
       }
    }
}
