<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->uf = 'MT';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->save();

        //utilizando o método create
        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'uf' => 'PR',
            'email' => 'contato@fornecedor200.com.br',
            'site' => 'fornecedor200.com.br'
        ]);

        //insert
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'uf' => 'MS',
            'email' => 'contato@fornecedor300.com.br',
            'site' => 'fornecedor300.com.br'
        ]);

    }
}
