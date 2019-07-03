<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {        
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
            'name' => 'Ricardo',
            'email' => 'ricmig@hotmail.com',
            'password' => 1234
        ]);
        // receita 1
        DB::table('receitas')->insert([
            'id_user' => 1,
            'titulo' => 'Carne Assada',
            'modo_de_preparo' => 'Em um recipiente, misture todos os temperos, acrescente a carne e deixe marinar por 30 minutos.',
            'categoria' => 1,
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 1,
            'nome_ingrediente' => 'Patinho',
            'quantidade' => '300 gramas',
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 1,
            'nome_ingrediente' => 'Cebola',
            'quantidade' => '3 unidades',
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 1,
            'nome_ingrediente' => 'Alho',
            'quantidade' => '3 dentes',
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 1,
            'nome_ingrediente' => 'Batata',
            'quantidade' => '1 kg',
        ]);
        // receita 2
        DB::table('receitas')->insert([
            'id_user' => 1,
            'titulo' => 'Frango Cozido com açafrão',
            'modo_de_preparo' => 'Aqueça a panela de pressão, acrescente o óleo, o frango com o molho do tempero e tampe a panela.',
            'categoria' => 2,
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 2,
            'nome_ingrediente' => 'Peito de frango',
            'quantidade' => '1/2 kg',
        ]);        
        DB::table('ingredientes')->insert([
            'id_receita' => 2,
            'nome_ingrediente' => 'Açafrão',
            'quantidade' => '200 gramas',
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 2,
            'nome_ingrediente' => 'Caldo de Legumes',
            'quantidade' => '2 colheres',
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 2,
            'nome_ingrediente' => 'Requeijão',
            'quantidade' => '3 colheres',
        ]);
        // receita 3
        DB::table('receitas')->insert([
            'id_user' => 1,
            'titulo' => 'Peixe ao Forno',
            'modo_de_preparo' => 'Tempere as postas ou filés de peixe com sal, alho, limão e pimenta. Deixe reservado por 1/2 hora..',
            'categoria' => 3,
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 3,
            'nome_ingrediente' => 'Tilápia',
            'quantidade' => '600 gramas postas',
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 3,
            'nome_ingrediente' => 'Pimentão',
            'quantidade' => '3 unidades',
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 3,
            'nome_ingrediente' => 'Quejo Ralado',
            'quantidade' => '2 colheres',
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 3,
            'nome_ingrediente' => 'Farinha de Rosca',
            'quantidade' => '200 gramas',
        ]);
        // receita 4
        DB::table('receitas')->insert([
            'id_user' => 1,
            'titulo' => 'Penne ao sugo e manjericão',
            'modo_de_preparo' => 'Refogue a cebola e o azeite, coloque a tomate e o açúcar. Deixe o molho ficar grosso e coloque o molho de tomate, acrescente o sal e salsa.',
            'categoria' => 4,
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 4,
            'nome_ingrediente' => 'Macarrão tipo penne',
            'quantidade' => '1 pacote',
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 4,
            'nome_ingrediente' => 'Manjericão',
            'quantidade' => '2 colhares de sopa',
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 4,
            'nome_ingrediente' => 'Molho de tomate',
            'quantidade' => 'a gosto',
        ]);
        // receita 5
        DB::table('receitas')->insert([
            'id_user' => 1,
            'titulo' => 'Carne de churrasco',
            'modo_de_preparo' => 'Aqueça a churrasqueira por 30 minutos, coloque o sal, coloque no espeto e deixe até que ela fique bem moreninha.',
            'categoria' => 1,
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 5,
            'nome_ingrediente' => 'Fraldinha',
            'quantidade' => '1 kg',
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 5,
            'nome_ingrediente' => 'Sal Grosso',
            'quantidade' => '1 ',
        ]);
        // receita 6
        DB::table('receitas')->insert([
            'id_user' => 1,
            'titulo' => 'Picanha com molho branco',
            'modo_de_preparo' => 'Derreta a manteiga em fogo baixo e junte o leite e a farinha misturados até o ponto de molho branco',
            'categoria' => 1,
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 6,
            'nome_ingrediente' => 'Medalhões de Picanha',
            'quantidade' => '500 gramas',
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 6,
            'nome_ingrediente' => 'Requeijão',
            'quantidade' => '2 colheres',
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 6,
            'nome_ingrediente' => 'Leite',
            'quantidade' => '1 litro ',
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 6,
            'nome_ingrediente' => 'Queijo parmesão',
            'quantidade' => '300 gramas',
        ]);
        DB::table('ingredientes')->insert([
            'id_receita' => 6,
            'nome_ingrediente' => 'Creme de 4 queijos',
            'quantidade' => '40 gramas',
        ]);                   
    }
}
