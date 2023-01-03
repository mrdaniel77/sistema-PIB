<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Membro;

class Dizimo extends Model
{
    use HasFactory;

    protected $fillable = [
        'membro_id',
        'valor',
        'comprovante'
    ];

    public function membro(){
        return $this->hasOne(Membro::class,'id','membro_id');
    }
}
