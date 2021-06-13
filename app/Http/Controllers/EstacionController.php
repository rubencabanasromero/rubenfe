<?php

namespace App\Http\Controllers;

use App\Models\Linea;
use Illuminate\Http\Request;
use App\Models\Estacion;
use Illuminate\Support\Facades\Auth;

class EstacionController extends Controller
{
    public function index(Request $request)
    {

        $estacionf = $request->get('estacion');

        if($estacionf != ""){
           // $estacion=DB::select("select * from estacions");
            $estacion = Estacion::where('nombre', 'like', '%'. $estacionf . '%')->get();
        }else{
            $estacion = Estacion::get();
        }


        if($estacionf != ""){
            return view('estacion.index', ['estacion' => $estacion]);
        }else{
            return view('estacion.index', ['estacion' => $estacion]);
        }
    }


    public function create()
    {
        if(@Auth::user()->hasRole('admin')) {
            return view('estacion.create');
        }else{
            return redirect()->route('welcome');
        }
    }


    public function store(Request $request)
    {
        $validate=$request->validate([
            'nombre' => 'required',
            'datos' => 'required',
        ]);

        $newestacion = new Estacion();
        $newestacion -> nombre=$request->nombre;
        $newestacion -> datos=$request->datos;

        $newestacion->save();

        return redirect()->route('estacion.index');
    }


    public function show($id)
    {
        $linea = Linea::where('idEstacion', 'like', '%'. $id . '%')->get();

        return view('estacion.show', ['linea' => $linea]);
    }


    public function edit($id)
    {
       // $miestacion = Estacion::where('idEstacion', 'like', '%'. $id . '%')->get();
        //$miestacion=Estacion::findOrFail($id);
        //$miestacion = Estacion::findOrFail($id);
       // $miestacion = Estacion::where('idEstacion',"=". $id)->get();

        if(@Auth::user()->hasRole('admin')) {
            $miestacion = Estacion::findOrFail($id);

            return view('estacion.edit')->with('miestacion', $miestacion);
        }else{
            return redirect()->route('welcome');
        }
    }


    public function update(Request $request, $id)
    {
        $validate=$request->validate([
            'nombre' => 'required',
            'datos' => 'required',
        ]);

        $newestacion=Estacion::findOrFail($id);
        $newestacion->nombre=$request->nombre;
        $newestacion->datos=$request->datos;

        $newestacion->save();
        return redirect()->route('estacion.index');
    }

    public function destroy($id){
        if(@Auth::user()->hasRole('admin')) {
            $estacion = Estacion::findOrFail($id);
            $estacion->delete();
            return redirect()->route('estacion.index');
        }else{
            return redirect()->route('welcome');
        }
    }
}
