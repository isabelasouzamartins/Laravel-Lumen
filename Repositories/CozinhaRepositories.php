<?php


namespace App\Repositories;
use App\Models\Cozinha;
use Illuminate\http\Request;

class CozinhaRepositories implements ICozinha
{
    private $model;

    public function __construct(Cozinha $cozinha)
    {
        $this->model = $cozinha;
    }

    public function cadastrar(Request $request)
    {
        return $this->model->create($request->all());
    }

    public function atualizar(Request $request,$id)
    {
        return $this->model->find($id)->update($request->all());
    }

    public function excluir(Request $request, $id)
    {
        return $this->model->find($id)->delete($request->all());

    }

    public function listar()
    {
        return $this->model->all();
    }
}
