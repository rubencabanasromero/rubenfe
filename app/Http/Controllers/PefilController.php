<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PefilController extends Controller
{
    public function index(){

        $user=User::findOrFail(Auth::id());
        $miperfil=$user->perfil()->get();

        return view('perfil.index')->with('miperfil',$miperfil);

    }

    public function edit($id)
    {
        $miperfil=User::findOrFail($id);
        return view('perfil.edit')->with('miperfil',$miperfil);
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

        $newperfil=User::findOrFail($id);
        $newperfil->name=$request->name;
        $newperfil->email=$request->email;
        $newperfil->password=$request->password;
        $newperfil->edad=$request->edad;

        $newperfil->save();
        return redirect()->route('perfil.index');
    }
}
