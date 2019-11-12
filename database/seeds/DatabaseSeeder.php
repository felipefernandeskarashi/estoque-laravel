<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UsersTableSeeder::class);
    	$this->call('ProdutoTableSeeder');
    }

}

class ProdutoTableSeeder extends Seeder{

	public function run(){

		DB::insert('insert into produtos
			(nome, quantidade, valor, descricao) values (?,?,?,?)',
			array('Geladeira', 2,  590.00, 'side by side com gelo na porta'));

		DB::insert('insert into produtos
			(nome, quantidade, valor, descricao) values (?,?,?,?)',
			array('Fogão', 5, 950.00, 'Painel automatico e forno eletrico'));
			
		DB::insert('insert into produtos
			(nome, quantidade, valor, descricao) values (?,?,?,?)',
			array('Microondas', 1,  152.00, 'manda sms quando terminar de esquentar'));		

	}
}
