<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Estados;

class EstadosController extends Controller {
    
	public function index() {
		$estados = DB::table('estados')->whereBetween('id', [1, 27])->orderBy('id', 'asc')->get();
		return view('listagem', compact('estados'));
	}

	public function index_v2() {
		// $estados = DB::table('estados')->whereBetween('id', [1, 27])->orderBy('id', 'asc')->get();
		$estados = DB::table('estados')->orderBy('id', 'asc')->get();
		return view('listagem_v2', compact('estados'));
	}

	public function busca(Request $request) {
		$pesquisa = $request->input_busca;
		$estados = DB::table('estados')->where('nome', 'like', "%{$pesquisa}%")->orderBy('id', 'asc')->get();
		return view('listagem_v2', compact('estados'));
	}

}

