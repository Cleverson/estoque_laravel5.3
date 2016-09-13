<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = ['nome','descricao','preco_custo','preco_venda'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
