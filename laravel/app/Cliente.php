<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function insert($ArrayParametros = array()) {
        $cliente = new Cliente();
        $cliente->nome = $ArrayParametros['nome'];
        $cliente->idade = $ArrayParametros['idade'];
        $cliente->endereco = $ArrayParametros['endereco'];
        $cliente->email =  $ArrayParametros['email'];
        $cliente->save();
    }
}
