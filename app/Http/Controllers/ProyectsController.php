<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyects;

class ProyectsController extends Controller
{
    public function index($url)
    {
        $proyect = Proyects::where('url',$url)->orderBy('id','asc')->first();
        return view('home',['proyect'=>$proyect]);
    }
    public function insert(Request $request)
    {
        if ($request->token === "&elYYxm$*wm4") {
            function clean($string) {
                $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
                $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
                $string = strtolower($string);
            
                return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
            }
            $url = clean($request->nombre);

            if (isset($request->link_1)) { 
            }else{
                return "Falta el link de la primera carpeta";
            }
            if (isset($request->link_2)) { 
            }else{
                return "Falta el link de la segunda carpeta";
            }
            if (isset($request->link_3)) { 
            }else{
                return "Falta el link de la tercera carpeta";
            }
            if (isset($request->link_4)) { 
            }else{
                return "Falta el link de la cuarta carpeta";
            }
            if (isset($request->link_5)) { 
            }else{
                return "Falta el link de la quinta carpeta";
            }


            $registro_id = Proyects::insertGetId([
                'nombre' => $request->nombre,
                'url' => $url,
                'link_1' => $request->link_1,
                'link_2' => $request->link_2,
                'link_3' => $request->link_3,
                'link_4' => $request->link_4,
                'link_5' => $request->link_5,

            ]);

            return "Registro con Exito";
        }else{
            return "Token Incorrecto";
        }
        
    }
}
