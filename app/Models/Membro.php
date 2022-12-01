<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    use HasFactory;

    protected $table = 'membros';
    protected $fillable = [

        'foto',
        'nome',
        'telefone',
        'nascimento',
        'email',
        'cep',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'uf'

    ];
}
