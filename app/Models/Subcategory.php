<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //Guarded permite decidir que campos no se van a habilitar para que alguien pueda meter datos
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];

    //Relacion 1 a * SubC-products
    public function products(){
        return $this->hasMany(Product::class);
    }
    //Relacion 1 a * Categories-Subcategories inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }

}
