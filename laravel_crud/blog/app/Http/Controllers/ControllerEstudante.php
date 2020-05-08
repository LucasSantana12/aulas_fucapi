<?php

namespace App\Http\Controllers;
use App\Estudante;
use Illuminate\Http\Request;

class ControllerEstudante extends Controller
{
    //

    public function index(){

       // $estudantes = Estudante::all();

       $estudantes = Estudante::paginate(5);
        return view('welcome', compact('estudantes'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){

        $this-> validate($request, [
            "nome"=>'required',
            "sobrenome"=>'required',
            "email"=>'required',
            "telefone"=>'required'

        ]);

        $e = new Estudante;
        $e-> nome =$request-> nome;
        $e-> sobrenome = $request -> sobrenome;
        $e-> email = $request -> email;
        $e-> telefone = $request -> telefone;
        $e->save();

        return redirect(route('home'))->with('successMsg','Estudante Inserido');
    }
}
