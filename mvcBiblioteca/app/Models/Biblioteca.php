<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Biblioteca extends Model
{
    protected $fillable = [
        'nome',
        'autor',
        'descricao',
        'numero_de_paginas',
        'data_de_publicacao',
        'custo',
        'preco',
        'imposto'
    ];

    public function biblioteca(){
        return $this->belongsTo(Biblioteca::class);
    }
}