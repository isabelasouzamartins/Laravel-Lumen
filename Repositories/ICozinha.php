<?php


namespace App\Repositories;
use Illuminate\http\Request;


interface ICozinha
{
    public function cadastrar(Request $request);
    public function atualizar(Request $request, $id);
    public function excluir(Request $request, $id);
    public function listar();
}
