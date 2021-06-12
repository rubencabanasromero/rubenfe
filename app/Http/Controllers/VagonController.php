<?php

namespace App\Http\Controllers;

use App\Models\Estacion;
use App\Models\Linea;
use App\Models\Vagones;
use Illuminate\Http\Request;

class VagonController extends Controller
{

    public function index(Request $request)
    {

            $vagon = Vagones::get();

            return view('vagon.index', ['vagon' => $vagon]);

    }


    public function create()
    {

        $estacion = Estacion::get();
        $linea = Linea::get();
        return view('vagon.create')->with('estacion',$estacion)->with('linea',$linea);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'Capacidad' => 'required',
            'idLinea' => 'required',
            'idEstacion' => 'required',
        ]);

        $newvagon = new Vagones();
        $newvagon->Capacidad = $request->Capacidad;
        $newvagon->idLinea = $request->idLinea;
        $newvagon->idEstacion = $request->idEstacion;

        $newvagon->save();

        return redirect()->route('vagon.index');
    }


    public function edit($id)
    {

        $estacion = Estacion::get();
        $linea = Linea::get();
        $vagon = Vagones::findOrFail($id);
        return view('vagon.edit')->with('estacion',$estacion)->with('linea',$linea)->with('vagon',$vagon);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'Capacidad' => 'required',
            'idLinea' => 'required',
            'idEstacion' => 'required',
        ]);

        $newvagon = Vagones::findOrFail($id);
        $newvagon->Capacidad = $request->Capacidad;
        $newvagon->idLinea = $request->idLinea;
        $newvagon->idEstacion = $request->idEstacion;

        $newvagon->save();
        return redirect()->route('vagon.index');
    }

    public function destroy($id)
    {

        $vagon = Vagones::findOrFail($id);
        $vagon->delete();
        return redirect()->route('vagon.index');

    }
}
