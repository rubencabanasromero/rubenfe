<?php

namespace App\Http\Controllers;

use App\Models\Linea;
use Illuminate\Http\Request;
use App\Models\Billetes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class MisbilletesController extends Controller
{

    public function index(Request $request)
    {

        $linea=Linea::get();
        $idUsuario=Auth::user()->id;

            $misbilletes = Billetes::where('idUsuario', 'like', '%'. $idUsuario . '%')->get();

            return view('misbilletes.index', ['misbilletes' => $misbilletes])->with('linea',$linea);
        }


    public function update(Request $request, $id)
    {
        $validate = $request->validate([

        ]);

        $newbillete = Billetes::findOrFail($id);
        $newbillete->idUsuario = null;
        $newbillete->save();
        return redirect()->route('misbilletes.index');
    }

}
