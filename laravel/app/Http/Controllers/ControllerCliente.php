<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Cliente;

class ControllerCliente extends Controller
{
    public function index() {
        $cliente = Cliente::all();
        return view('cliente', ['clientes' => $cliente]);
    }

    public function setModalCadastro() {
        return view('modalclientes');
    }

    public function setCadastro(Request $req) {
        // => O unique verifica na tabela passada como parametro  se aquele valor já existe
        /*$req->validate([
            'nome' => 'required|min:5|unique:clientes',
            'idade' => 'required|max:2',
            'endereco' => 'required',
            'email' => 'required|email'
        ]);*/
        
        $regras = [
            'nome' => 'required|min:5|unique:clientes',
            'idade' => 'required|max:2',
            'endereco' => 'required',
            'email' => 'required|email'
        ];

        $mensagens = [
            'required' => 'O campo :attribute é obrigatório'
        ];

        /*$mensagens = [
            'nome.required' => 'O campo nome é obrigatório'
        ];*/
        
        $req->validate($regras, $mensagens);

        $ArrayParametros = $req;
        $cliente = new Cliente();
        $cliente->insert($ArrayParametros);
        return redirect('/cliente');

    }
}
