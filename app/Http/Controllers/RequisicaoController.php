<?php

namespace App\Http\Controllers;

use App\Models\Requisicao;
use Illuminate\Http\Request;

class RequisicaoController extends Controller
{
    //
    public function adicionarQuantia(Request $request)
    {
        $dados = $request->all();
        $valor = $dados['valor'];
        $req = new Requisicao();
        $req->insert([
            'saldo'=>$valor, 
            'descricao'=>'Ganho'
        ]);
        
        echo json_encode(1);
        exit;
    }

    public function adicionarGasto(Request $request)
    {
        $dados = $request->all();
        $valor = $dados['valor'];
        $req = new Requisicao();
        $req->insert([
            'saldo'=>$valor,
            'descricao'=>'Gasto'
        ]);
        
        echo json_encode(1);
        exit;
    }

    public function exibirTudo()
    {
        $req = Requisicao::get();
        
        $all = [];
        foreach($req as $item => $arr){
            $all[] = [
                'desc'=>$arr['descricao'],
                'valor'=>$arr['saldo'],
                'id'=>$arr['id']
            ];
        }

        return $all;
    }

    public function removerItem(Request $req)
    {   
        // dd($req->all());
        Requisicao::find($req['id'])->delete();
            echo json_encode(1);exit;
        
    }


}
