<?php

namespace App\Http\Controllers;
use App\Estudante;
use Illuminate\Http\Request;

class ControllerEstudante extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }

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

        return redirect(route('home1'))->with('successMsg','Estudante Inserido');
    }
    public function edit($id){
        $e = Estudante::find($id);

        return view('edit',compact('e'));
    }

    public function update(Request $request, $id){

        $this-> validate($request, [
            "nome"=>'required',
            "sobrenome"=>'required',
            "email"=>'required',
            "telefone"=>'required'

        ]);

        $e = Estudante::find($id);
        $e-> nome =$request-> nome;
        $e-> sobrenome = $request -> sobrenome;
        $e-> email = $request -> email;
        $e-> telefone = $request -> telefone;
        $e->save();

        return redirect(route('home1'))->with('successMsg','Estudante Atualizado');
    }

    public function delete($id){
        Estudante::find($id)->delete();


        return redirect(route('home1'))->with('successMsg','Estudante Deletado');

    }
}
