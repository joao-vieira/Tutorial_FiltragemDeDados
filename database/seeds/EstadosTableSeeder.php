<?php

use Illuminate\Database\Seeder;
use App\Estados;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
       
    	$acre 					= new Estados();
    	$acre->nome 			= 'Acre';
    	$acre->uf 				= 'AC';
    	$acre->save();

    	$alagoas 				= new Estados();
    	$alagoas->nome 			= 'Alagoas';
    	$alagoas->uf 			= 'AL';
    	$alagoas->save();

    	$amapa 					= new Estados();
    	$amapa->nome 			= 'Amapá';
    	$amapa->uf 				= 'AP';
    	$amapa->save();

    	$amazonas 				= new Estados();
    	$amazonas->nome 		= 'Amazonas';
    	$amazonas->uf 			= 'AM';
    	$amazonas->save();

    	$bahia 					= new Estados();
    	$bahia->nome 			= 'Bahia';
    	$bahia->uf 				= 'BA';
    	$bahia->save();

    	$ceara 					= new Estados();
    	$ceara->nome 			= 'Ceará';
    	$ceara->uf 				= 'CE';
    	$ceara->save();

    	$distFederal 			= new Estados();
    	$distFederal->nome 		= 'Distrito Federal';
    	$distFederal->uf 		= 'DF';
    	$distFederal->save();

    	$espSanto 				= new Estados();
    	$espSanto->nome 		= 'Espírito Santo';
    	$espSanto->uf 			= 'ES';
    	$espSanto->save();

    	$goias 					= new Estados();
    	$goias->nome 			= 'Goiás';
    	$goias->uf 				= 'GO';
    	$goias->save();

    	$maranhao 				= new Estados();
    	$maranhao->nome 		= 'Maranhão';
    	$maranhao->uf 			= 'MA';
    	$maranhao->save();

    	$mtSul 					= new Estados();
    	$mtSul->nome 			= 'Mato Grosso do Sul';
    	$mtSul->uf 				= 'MS';
    	$mtSul->save();

    	$mt 					= new Estados();
    	$mt->nome 				= 'Mato Grosso';
    	$mt->uf 				= 'MT';
    	$mt->save();

    	$minasGerais 			= new Estados();
    	$minasGerais->nome 		= 'Minas Gerais';
    	$minasGerais->uf 		= 'MG';
    	$minasGerais->save();

    	$parana 				= new Estados();
    	$parana->nome 			= 'Paraná';
    	$parana->uf 			= 'PR';
    	$parana->save();

    	$paraiba 				= new Estados();
    	$paraiba->nome 			= 'Paraíba';
    	$paraiba->uf 			= 'PB';
    	$paraiba->save();

    	$para 					= new Estados();
    	$para->nome 			= 'Pará';
    	$para->uf 				= 'PA';
    	$para->save();

    	$pernambuco 			= new Estados();
    	$pernambuco->nome 		= 'Pernambuco';
    	$pernambuco->uf 		= 'PE';
    	$pernambuco->save();

    	$piaui 					= new Estados();
    	$piaui->nome 			= 'Piauí';
    	$piaui->uf 				= 'PI';
    	$piaui->save();

    	$rJaneiro 				= new Estados();
    	$rJaneiro->nome 		= 'Rio de Janeiro';
    	$rJaneiro->uf 			= 'RJ';
    	$rJaneiro->save();

    	$rNorte 				= new Estados();
    	$rNorte->nome 			= 'Rio Grande do Norte';
    	$rNorte->uf 			= 'RN';
    	$rNorte->save();

    	$rSul 					= new Estados();
    	$rSul->nome 			= 'Rio Grande do Sul';
    	$rSul->uf 				= 'RS';
    	$rSul->save();

    	$rondonia 				= new Estados();
    	$rondonia->nome 		= 'Rondônia';
    	$rondonia->uf 			= 'RO';
    	$rondonia->save();

    	$roraima 				= new Estados();
    	$roraima->nome 			= 'Roraima';
    	$roraima->uf 			= 'RR';
    	$roraima->save();

    	$sCatarina 				= new Estados();
    	$sCatarina->nome 		= 'Santa Catarina';
    	$sCatarina->uf 			= 'SC';
    	$sCatarina->save();

    	$sergipe 				= new Estados();
    	$sergipe->nome 			= 'Sergipe';
    	$sergipe->uf 			= 'SE';
    	$sergipe->save();

    	$sp 					= new Estados();
    	$sp->nome 				= 'São Paulo';
    	$sp->uf 				= 'SP';
    	$sp->save();

    	$tocantins 				= new Estados();
    	$tocantins->nome 		= 'Tocantins';
    	$tocantins->uf 			= 'TO';
    	$tocantins->save();

    }
}
