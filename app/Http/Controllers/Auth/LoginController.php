<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeLoginRequest; // corrigido o namespace e nome da classe
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(MakeLoginRequest $request){  // corrigido o nome aqui também

        if($request->tryToLogin()){
            return to_route("dashboard");
        }

        return back()->with(['message'=>'não encontrado']);
    }
}
