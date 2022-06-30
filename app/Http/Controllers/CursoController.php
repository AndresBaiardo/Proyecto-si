<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Http\Request;
use LengthException;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class CursoController extends Controller
{
    
    public function index(Request $request){
        $buscarpor=$request->get('buscarpor');
        $cursos = Curso::where('nombre','like','%'.$buscarpor.'%')->get();
        return view('pantallas.index', compact('cursos' , 'buscarpor'));  
    }
    public function Nosotros(Request $request){
        $buscarpor=$request->get('buscarpor');
        $cursos = Curso::where('nombre','like','%'.$buscarpor.'%')->get();
        return view('pantallas.nosotros', compact('cursos' , 'buscarpor'));
    }
    public function inscripciones(Request $request){
        $buscarpor=$request->get('buscarpor');
        $cursos = Curso::where('nombre','like','%'.$buscarpor.'%')->get();
        return view('pantallas.inscripcion', compact('cursos' , 'buscarpor'));
    }
    public function deportes(Request $request){
        $buscarpor=$request->get('buscarpor');
        $cursos = Curso::where('nombre','like','%'.$buscarpor.'%')->get();
        return view('pantallas.deportes', compact('cursos' , 'buscarpor'));
    }
    public function boxeo(Request $request){
        $buscarpor=$request->get('buscarpor');
        $cursos = Curso::where('nombre','like','%'.$buscarpor.'%')->get();
        return view('pantallas.boxeo', compact('cursos' , 'buscarpor'));
    }
    public function futbol(Request $request){
        $buscarpor=$request->get('buscarpor');
        $cursos = Curso::where('nombre','like','%'.$buscarpor.'%')->get();
        return view('pantallas.futbol', compact('cursos' , 'buscarpor'));
    }
    public function basquetbol(Request $request){
        $buscarpor=$request->get('buscarpor');
        $cursos = Curso::where('nombre','like','%'.$buscarpor.'%')->get();
        return view('pantallas.basquetbol', compact('cursos' , 'buscarpor'));
    }
    public function voleibol(Request $request){
        $buscarpor=$request->get('buscarpor');
        $cursos = Curso::where('nombre','like','%'.$buscarpor.'%')->get();
        return view('pantallas.voleibol', compact('cursos' , 'buscarpor'));
    }
    public function mapa(Request $request){
        $buscarpor=$request->get('buscarpor');
        $cursos = Curso::where('nombre','like','%'.$buscarpor.'%')->get();
        return view('pantallas.mapa', compact('cursos' , 'buscarpor'));
    }

    public function carrusel(Request $request){
        $buscarpor=$request->get('buscarpor');
        $cursos = Curso::where('nombre','like','%'.$buscarpor.'%')->get();
        return view('pantallas.carrusel', compact('cursos' , 'buscarpor'));  
    }
    public function login(Request $request){
        $buscarpor=$request->get('buscarpor');
        $cursos = Curso::where('nombre','like','%'.$buscarpor.'%')->get();
        return view('auth.login', compact('cursos' , 'buscarpor'));  
    }
    public function reset(Request $request){
        $buscarpor=$request->get('buscarpor');
        $cursos = Curso::where('nombre','like','%'.$buscarpor.'%')->get();
        return view('auth.passwords.reset', compact('cursos' , 'buscarpor'));  
    }
    public function admin(Request $request){
        $buscarpor=$request->get('buscarpor');
        $cursos = Curso::where('nombre','like','%'.$buscarpor.'%')->get();
        if(!Auth::guest()){
            return view('pantallas.admin', compact('cursos' , 'buscarpor'));  
        }else{
            return back();
        }
    }
}
