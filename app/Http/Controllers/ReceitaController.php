<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Receitas;
use App\Ingredientes;

class ReceitaController extends Controller
{

          /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mostrarReceitas () {      
        $receitas = Receitas::simplePaginate(4);       
        $ingredientes = Ingredientes::all();

        return view('loja')->with('ingredientes', $ingredientes)->with('receitas', $receitas);
    }

    public function filtrarReceitaPorCategoria($id) {
        $ingredientes = Ingredientes::all();
        $receitas = Receitas::where('categoria', '=', $id)->simplePaginate(5);

        return view('loja')->with('receitas', $receitas)->with('ingredientes', $ingredientes);        
    }

    public function registerNewReceita(){
        return view('cadastrar-receita');
    }


    public function setNewReceita(Request $request){
        $receita = new Receitas;        
        $receita->titulo = $request->input('nomeReceita');
        $receita->modo_de_preparo = $request->input('modoDePreparo');
        $receita->categoria = $request->input('categoria');
        $receita->id_user = $request->input('id_user');
        $registered = $receita->save();
        $LastInsertId = $receita->id_receita;     
        

        foreach($request->ingrediente as $key => $value){          
            $ingredientes = new Ingredientes;            
            if($key % 2 == 0){
                $aux = $value;                         
                } else {
                $ingredientes->nome_ingrediente = $aux;    
                $ingredientes->quantidade = $value;
                $ingredientes->id_receita = $LastInsertId;
                $ingredientes->save();     
            }

        }

        if ($registered) {
            return view('cadastrar-receita')->with('mensagem', 'Receita enviada com sucesso!'); 
        } else {
            return view('cadastrar-receita')->with('mensagem', 'Erro ao enviar receita.'); 
        }

     }
}

