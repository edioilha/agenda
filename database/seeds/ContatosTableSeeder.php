<?php

use Illuminate\Database\Seeder;

class ContatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //opcao 1 manualmente
        DB::table('contatos')->insert([
            'saudacao'  => 'Sr.',
            'nome'      => 'Edio Ilha',
            'telefone'  => '(51) 98521-6112',
            'data_nascimento' => '1970/09/12',
            'email'     => 'edioilha@hotmail.com',
            'nota'      => 'Usuário criado utilizando Seeder método DB.',
            'created_at'=> date('Y-m-d H:i:s')
        ]);

        //Opção 2 autom.
        factory(App\Contato::class, 20)->create();
    }
}
