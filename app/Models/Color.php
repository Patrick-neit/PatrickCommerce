<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    //Relacion *a* products y size
    public function products(){
        return $this->belongsToMany(Product::class);
    }

    //Relacion *a*
    public function sizes(){
        return $this->belongsToMany(Size::class);;
    }

}
