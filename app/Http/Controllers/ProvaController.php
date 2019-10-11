<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProvaController extends Controller
{
    public function index(Request $request){

        $user = $request->input('user');
        $password = $request->input('password');
        
        if($user == "syscoin" && $password == "meEscolhe") {
            return json_encode(["mensagem" => "Meu nome completo e Mateus Silveira Pires e Eu quero essa vaga!"]);
        }
        return json_encode(["mensagem" => "Credenciais erradas"]);

    }
}
