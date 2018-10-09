<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //opcao 1 manualmente
        DB::table('users')->insert([
            'name'      => 'Administrador',
            'email'     => 'admin@local.local',
            'password'  => bcrypt('secret'),
            'created_at'=> date('Y-m-d H:i:s')
        ]);

        //Opção 2 autom.
        factory(App\User::class, 5)->create();
    }
}
