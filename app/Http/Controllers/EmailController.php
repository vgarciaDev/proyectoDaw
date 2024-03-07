<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function __invoke(Request $request)
    {
        $nombre= $request->input('nombre');
        $apellidos = $request->input('apellidos');
        $telefono = $request->input('telefono');
        $email = $request->input('email');
        $selector = $request->input('selector');
        $mensaje = $request->input('mensaje');

        // Aquí puedes personalizar el contenido del correo electrónico
        $contenido = "Nombre: $nombre\nApellidos: $apellidos\nTelefono: $telefono\nEmail: $email\nSelector: $selector\nMensaje: $mensaje";

        // Envía el correo electrónico
        Mail::raw($contenido, function ($message) use ($email) {
            $message->to('royaltekh@gmail.com')
                    ->subject('Nuevo mensaje del formulario de contacto');
        });

        return view('sendEmail');
    }
}
