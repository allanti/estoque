<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = false;

    protected $fillable = array('nome', 'descricao', 'quantidade','tamanho', 'valor');

}
