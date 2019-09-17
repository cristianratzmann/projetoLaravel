<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App;

class PopularTabela extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:popular';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Preenche nas tabelas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $categoria = new App\Categoria();
        $categoria->nomcat = 'Gamers';
        $categoria->save();
        $categoria = new App\Categoria();
        $categoria->nomcat = 'Utilitários';
        $categoria->save();
        $categoria = new App\Categoria();
        $categoria->nomcat = 'Cama, mesa e banho';
        $categoria->save();
        $categoria = new App\Categoria();
        $categoria->nomcat = 'Eletrodomésticos';
        $categoria->save();
        $categoria = new App\Categoria();
        $categoria->nomcat = 'Ferramentas';
        $categoria->save();
        
        $produto = new App\Produto();
        $produto->nompro = "Microondas";
        $produto->despro = "Para esquentar comida";
        $produto->vlrpro = "350.00";
        $produto->codcat = 1;
        $produto->save();
        
        $produto = new App\Produto();
        $produto->nompro = "Chave de fenda";
        $produto->despro = "Para apertar parafuso";
        $produto->vlrpro = "25.00";
        $produto->codcat = 2;
        $produto->save();
        
        $produto = new App\Produto();
        $produto->nompro = "Toalha";
        $produto->despro = "Para se secar";
        $produto->vlrpro = "15.00";
        $produto->codcat = 3;
        $produto->save();
        
        $produto = new App\Produto();
        $produto->nompro = "Televisão";
        $produto->despro = "Para assistir";
        $produto->vlrpro = "999.00";
        $produto->codcat = 4;
        $produto->save();
        
        $produto = new App\Produto();
        $produto->nompro = "Teclado Razer";
        $produto->despro = "Para jogar";
        $produto->vlrpro = "350.00";
        $produto->codcat = 5;
        $produto->save();
        
        $vnome [] = 'Denner';
        $vnome [] = 'Cris';
        $vnome [] = 'Gabriel';
        $vnome [] = 'jackson';
        $vnome [] = 'Joao';
        
        $cpf [] = '99999999999';
        $cpf [] = '99999999995';
        $cpf [] = '99999999994';
        $cpf [] = '99999999993';
        $cpf [] = '99999999992';
        
        $end [] = 'Rua Joaquim Zucco';
        $end [] = 'Rua erico fuckner';
        $end [] = 'Rua francisco mendes';
        $end [] = 'Rua gustavo halfpap';
        $end [] = 'Rua primeiro de maio';
        
        $bai [] = 'primeiro de maio';
        $bai [] = 'Santa rita';
        $bai [] = 'Santa Terezinha';
        $bai [] = 'Limeira';
        $bai [] = 'mineral';
        
        $cid [] = 'Brusque';
        $cid [] = 'Dom Joaquim';
        $cid [] = 'João Batista';
        $cid [] = 'itajai';
        $cid [] = 'brusque';
        
        $uf [] = 'SC';
        $uf [] = 'PR';
        $uf [] = 'RJ';
        $uf [] = 'SP';
        $uf [] = 'RS';
        
        $tel [] = '11111111111';
        $tel [] = '11111111112';
        $tel [] = '11111111113';
        $tel [] = '11111111114';
        $tel [] = '11111111115';
        
        $num [] = 1;
        $num [] = 2;
        $num [] = 3;
        $num [] = 4;
        $num [] = 5;
        
        for($i = 0; $i < 5 ; $i++){
            $cliente = new App\Cliente();
            $cliente->nomcli = $vnome[$i];
            $cliente->cpfcli = $cpf[$i];
            $cliente->endcli = $end[$i];
            $cliente->numcli = $num[$i];
            $cliente->baicli = $bai[$i];
            $cliente->cidcli = $cid[$i];
            $cliente->ufcli = $uf[$i];
            $cliente->telcli = $tel[$i];
            $cliente->save();
        }
                             
    }
}
