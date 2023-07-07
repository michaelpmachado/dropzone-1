<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $table = "uploads";
    protected $guarded = [];

    public function conteudo(){
        return $this->belongsTo(Conteudo::class, 'id_processos', 'id');
    }
}
