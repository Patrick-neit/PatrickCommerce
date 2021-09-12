<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_At','updated_at']; //Estos campos no recibiran asignacion masiva

    //Relacion 1 a * inversa product recibe de brand
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    //Relacion inversa product - subcategory
    public function subcategory (){
        return $this->belongsTo(subcategory::class);
    }

    //Relacion products and size 1 a *
    public function sizes(){
        return $this->hasMany(Size::class);
    }

    //Relacion * a * products y colors
    public function colors(){
        return $this ->hasMany(Color::class);
    }
    //Relacion 1 a * poliformica con images -- Le paso el modelo image y el metodo "imageable" definido en el modelo image
    public function images(){
        return $this->morphMany(Image::class, "imageable");
    }
}
