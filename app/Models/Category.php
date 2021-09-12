<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Fillable indica los campos que queremos habilitar y se asignen masivamente
    use HasFactory;
    protected $fillable = ['name','slug','image','icon']; //Asignacion masiva -- Faker/Factory?


    //Relaciones
    //Relacion de 1 a *
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }
    //Relacion muchos a muchos Category - Brand
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }
    //Esta relacion se da atraves de la tabla subcategory
    public function products(){
        return $this->hasManyThrough(Product::class,Subcategory::class);
    }
}
