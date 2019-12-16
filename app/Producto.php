<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    public function scopeCategoria($query, $categoria){
        return $query->where('categoria',$categoria);
    }
}
