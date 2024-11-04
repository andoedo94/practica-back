<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getUsuarios(){
        $users = User::get();
        return $users;
    }

    public function putUsuario(Request $request)
    {
        $user = User::where('id', $request->id)->get()->first();
        if($user != null){
            $user->nombres = $request->nombres;
            $user->apellidos = $request->apellidos;
            $user->save();
        }
    }
}
