<?php

namespace App\Http\Controllers;

use App\Responses\ApiResponse;
use Illuminate\Http\Request;


class ClienteController extends Controller
{
    public function salvar()
    {

    }

    public function editar(int $id)
    {

    }
    public function listar()
    {
        // return Response()->json(data: ["nome"  => "Lucas"], status:200);
        return ApiResponse::success(data:["nome" => "Lucas"]);
    }
    public function excluir(int $id)
    {

    }
}
