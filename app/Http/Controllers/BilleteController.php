<?php

namespace App\Http\Controllers;

use App\Models\Estacion;
use App\Models\Linea;
use App\Models\Vagones;
use App\Models\Billetes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BilleteController extends Controller
{
    public function index(Request $request)
    {
        if(@Auth::user()->hasRole('admin')){


        $billete = Billetes::get();

        return view('billete.index', ['billete' => $billete]);
        }else{
        return redirect()->route('welcome');
        }
    }


    public function create()
    {

        if(@Auth::user()->hasRole('admin')) {
            $vagon = Vagones::get();
            $estacion = Estacion::get();
            $linea = Linea::get();
            return view('billete.create')->with('estacion', $estacion)->with('linea', $linea)->with('vagon', $vagon);
        }else{
            return redirect()->route('welcome');
        }
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

        if(@Auth::user()->hasRole('admin')) {
            $estacion = Estacion::get();
            $linea = Linea::get();
            $vagon = Vagones::findOrFail($id);
            return view('vagon.edit')->with('estacion', $estacion)->with('linea', $linea)->with('vagon', $vagon);
        }else{
            return redirect()->route('welcome');
        }
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'idUsuario' => 'required',
        ]);

        $newbillete = Billetes::findOrFail($id);
        $newbillete->idUsuario = $request->idUsuario;
        $newbillete->save();
        return redirect()->route('linea.index');
    }

    public function destroy($id)
    {
        if(@Auth::user()->hasRole('admin')) {
            $billete = Billetes::findOrFail($id);
            $billete->delete();
            return redirect()->route('billete.index');
        }else{
            return redirect()->route('welcome');
        }
    }
}
