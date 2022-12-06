<?php

namespace App\Models;

use App\Http\Controllers\MembroController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dizimo extends Model
{
    use HasFactory;

    protected $fillable = [
        'membro_id',
        'valor',
        'comprovante'
    ];

    public function membro(){
        return $this->hasOne(MembroController::class,'id','membro_id');
    }
}
