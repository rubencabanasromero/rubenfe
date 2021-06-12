<?php

namespace App\Http\Controllers;

use App\Models\Estacion;
use App\Models\Linea;
use App\Models\Vagones;
use App\Models\Billetes;
use Illuminate\Http\Request;

class BilleteController extends Controller
{
    public function index(Request $request)
    {

        $billete = Billetes::get();

        return view('billete.index', ['billete' => $billete]);

    }


    public function create()
    {

        $vagon = Vagones::get();
        $estacion = Estacion::get();
        $linea = Linea::get();
        return view('billete.create')->with('estacion',$estacion)->with('linea',$linea)->with('vagon',$vagon);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'precio' => 'required',
            'idLinea' => 'required',
            'idEstacion' => 'required',
            'idVagon' => 'required',
        ]);

        $newbillete = new Billetes();
        $newbillete->precio = $request->precio;
        $newbillete->idLinea = $request->idLinea;
        $newbillete->idEstacion = $request->idEstacion;
        $newbillete->idVagon = $request->idVagon;

        $newbillete->save();

        return redirect()->route('billete.index');
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

        $billete = Billetes::findOrFail($id);
        $billete->delete();
        return redirect()->route('billete.index');

    }
}
