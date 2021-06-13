<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(@Auth::user()->hasRole('admin')) {
            $miusuario = User::all();
            //  $miusuario=$user->usuarios()/*->get*/;

            return view('usuarios.index')->with('miusuario', $miusuario);
        }else{
            return redirect()->route('welcome');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(@Auth::user()->hasRole('admin')) {
            return view('usuarios.create');
        }else{
            return redirect()->route('welcome');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=$request->validate([
            'name' => 'required | min:4',
            'email' => 'required',
            'password'=>'required| min:4',
            'edad'=>'required',
        ]);

        $newusuarios = new user();
        $newusuarios -> name=$request->name;
        $newusuarios -> email=$request->email;
        $newusuarios -> password=$request->password;
        $newusuarios -> edad=$request->edad;

        $newusuarios->save();

        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(@Auth::user()->hasRole('admin')) {
            $miusuario = User::findOrFail($id);
            return view('usuarios.show')->with('miusuario', $miusuario);
        }else{
            return redirect()->route('welcome');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(@Auth::user()->hasRole('admin')) {
            $miusuario = User::findOrFail($id);
            return view('usuarios.edit')->with('miusuario', $miusuario);
        }else{
            return redirect()->route('welcome');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate=$request->validate([
            'name' => 'required',
            'email' => 'required',
            'password'=>'required',
            'edad'=>'required',
        ]);

        $newusuarios=User::findOrFail($id);
        $newusuarios->name=$request->name;
        $newusuarios->email=$request->email;
        $newusuarios->password=$request->password;
        $newusuarios->edad=$request->edad;

        $newusuarios->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if(@Auth::user()->hasRole('admin')) {
            $usuario = User::findOrFail($id);
            $usuario->delete();
            // User::deleted($id);
            return redirect()->route('usuarios.index');
        }else{
            return redirect()->route('welcome');
        }
    }
}
