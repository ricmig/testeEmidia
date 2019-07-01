<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ingredientes;

class Receitas extends Model
{
    protected $table = 'receitas';
    protected $primaryKey = 'id_receita';

    public function ingredientes($id)
    {   
        $ingredientes = Ingredientes::where('id_receita', $id)->get();
        
        return $ingredientes;
    }
}
