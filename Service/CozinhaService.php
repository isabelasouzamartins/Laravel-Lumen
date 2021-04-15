<?php


namespace App\Service;


use App\Repositories\ICozinha;
use Illuminate\Http\Request;

class CozinhaService
{
    private $coz;

    public function __construct(ICozinha $coz)
    {
        $this->coz = $coz;
    }

    //implementar as regras de negocio ,copiando as funções da CozinhaController
    public function cadastrar(Request $request)
    {
        $this->coz->cadastrar($request);
        return response()->json('cozinha cadastrada');
    }

    public function atualizar(Request $request,$id)
    {
        $cozinha=$this->coz->atualizar($request,$id);
        return response()->json($cozinha);
    }

    public function excluir(Request $request, $id)
    {
        $cozinha = $this->coz->excluir($request,$id);
        return response()->json($cozinha);
    }

    public function listar()
    {
        $cozinhas=$this->coz->listar();
        return response()->json($cozinhas);
    }

}
