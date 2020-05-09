<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use  Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index(){
        return view('auth.passwords.change');
    }

    public function update(Request $req){
        $this-> validate($req,[
            'senha_ant'=>'required',
            'password'=>'required|confirmed'
        ]);

        $hash = Auth::user()->password;
        if(Hash::check($req->senha_ant,$hash)){
            $user= User::find(Auth::id());
            $user -> password  = Hash::make($req->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login')->with('successMsg','Senha alterada!');
        }else{
        return redirect()->back()->with('errorMsg','SENHA ATUAL INVALIDA');

        }
    }
}
