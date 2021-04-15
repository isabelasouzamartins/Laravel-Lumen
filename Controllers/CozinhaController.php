<?php


namespace App\Http\Controllers;


use App\Models\Cozinha;
use App\Service\CozinhaService;
use Illuminate\Http\Request;


class CozinhaController extends Controller
{
    //versão PHP 8.0.3 ,banco "restaurante" criado no phpMyAdin criada a tabela cozinha e migrations
    //criação de 4 endpoint
    //comentada as linhas dentro das funçoes pois não é mais trabalho dessa class,agora em diante é o Service.

    private $cozinhaService;

    public function __construct(CozinhaService $cozinhaService) //CozinhaController quando iniciar saberá que dera executar CozinhaService
    {
        $this->cozinhaService = $cozinhaService;
    }

    public function cadastrar(Request $request)
    {
        //Cozinha::create($request->all());
        // return response()->json("Cozinha cadastrada");
        return $this->cozinhaService->cadastrar($request);

    }

    public function atualizar(Request $request, $id)
    {
        // $cozinha=Cozinha::find($id) 1º Antes de atualizar devemos buscar a cozinha
        // $cozinha = Cozinha::find($id)->update($request->all());
        //return response()->json($cozinha);
        return $this->cozinhaService->atualizar($request,$id);
    }

    public function excluir(Request $request, $id)
    {
        // $cozinha = Cozinha::find($id)->delete($request->all());
        return $this->cozinhaService->excluir($request,$id);

    }

    public function listar()
        /* all() Retorna todos os registros da tabela cozinha (Seria o equivalente a
        SELECT * FROM products, para o MySQL)*/
    {
        return $this->cozinhaService->listar();
        //$cozinhas = Cozinha::all();
        //return response()->json($cozinhas);
    }


}
