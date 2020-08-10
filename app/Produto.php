<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //preenchível
    protected $fillable = ['nome', 'custo', 'preco', 'quantidade'];
}
