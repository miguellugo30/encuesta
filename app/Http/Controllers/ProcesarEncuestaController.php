<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionEncuesta;
use App\Models\datos_encuesta;
use Illuminate\Http\Request;


class ProcesarEncuestaController extends Controller
{
    public function guardar(ValidacionEncuesta $request)
    {

        \DB::table('datos_encuesta')->insert([
            'pregunta1'   => $request->pregunta1,
            'pregunta2'   => $request->pregunta2,
            'pregunta3'   => $request->pregunta3,
            'pregunta4'   => $request->pregunta4,
            'pregunta5'   => $request->pregunta5,
            'pregunta5-1' => $request->pregunta51,
            'pregunta5-2' => $request->pregunta52,
            'pregunta6'   => $request->pregunta6,
            'pregunta7'   => $request->pregunta7,
            'pregunta8'   => $request->pregunta8,
        ]);
        /*datos_encuesta::create([
            'pregunta1'   => $request->pregunta1,
            'pregunta2'   => $request->pregunta2,
            'pregunta3'   => $request->pregunta3,
            'pregunta4'   => $request->pregunta4,
            'pregunta5'   => $request->pregunta5,
            'pregunta5-1' => $request->pregunta51,
            'pregunta5-2' => $request->pregunta52,
            'pregunta6'   => $request->pregunta6,
            'pregunta7'   => $request->pregunta7,
            'pregunta8'   => $request->pregunta8,
        ]);


        */
        return redirect('/');

    }
}
