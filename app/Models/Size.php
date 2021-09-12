<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $fillable = ['name','product_id']; //Asignacion masiva
    //Relacion 1 a * inversa Product size
    public function product(){
        return $this->belongsTo(product::class);
    }

    //Relacion *a* Colors -sizes
    public function products(){
        return $this->hasMany(product::class);
    }
}
