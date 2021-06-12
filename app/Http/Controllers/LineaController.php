<?php

namespace App\Http\Controllers;

use App\Models\Estacion;
use App\Models\Billetes;
use App\Models\Linea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LineaController extends Controller
{



    public function index(Request $request)
    {


        $precio = Billetes::get();
        $desde = $request->get('desde');
        $hasta = $request->get('hasta');

        if($desde != "" && $hasta!=""){
            $linea = Linea::where('idOrigen', 'like', '%'. $desde . '%')->where('idDestino','like','%'.$hasta.'%')->get();
        }else{
            $linea = linea::get();
        }


        if($desde != "" && $hasta!=""){
            return view('linea.index', ['linea' => $linea])->with('precio',$precio);
        }else{
            return view('linea.index', ['linea' => $linea])->with('precio',$precio);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 /*   public function create()
    {
        return view('estacion.create');
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        $estacion = Estacion::get();;
        return view('linea.create')->with('estacion',$estacion);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nombre' => 'required',
            'idOrigen' => 'required',
            'idDestino' => 'required',
            'HoraSalida' => 'required',
            'Horallegada' => 'required',
            'idEstacion' => 'required',
        ]);

        $newlinea = new Linea();
        $newlinea->nombre = $request->nombre;
        $newlinea->idOrigen = $request->idOrigen;
        $newlinea->idDestino = $request->idDestino;
        $newlinea->Horallegada = $request->Horallegada;
        $newlinea->HoraSalida = $request->HoraSalida;
        $newlinea->idEstacion = $request->idEstacion;

        $newlinea->save();

        return redirect()->route('linea.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
       public function show($id)
    {
        $milinea = Linea::findOrFail($id);
        return view('linea.show')->with('milinea', $milinea);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $estacion = Estacion::get();;
        $milinea = Linea::findOrFail($id);
        return view('linea.edit')->with('milinea', $milinea)->with('estacion',$estacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nombre' => 'required',
            'idOrigen' => 'required',
            'idDestino' => 'required',
            'HoraSalida' => 'required',
            'Horallegada' => 'required',
            'idEstacion' => 'required',
        ]);

        $newlinea=Linea::findOrFail($id);
        $newlinea->nombre = $request->nombre;
        $newlinea->idOrigen = $request->idOrigen;
        $newlinea->idDestino = $request->idDestino;
        $newlinea->Horallegada = $request->Horallegada;
        $newlinea->idEstacion = $request->idEstacion;

        $newlinea->save();
        return redirect()->route('linea.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $linea = Linea::findOrFail($id);
        $linea->delete();
        return redirect()->route('linea.index');

    }
}

