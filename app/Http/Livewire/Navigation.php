<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class Navigation extends Component
{
    public function render()
    { //Mandamos  y accedemos a todas las categorias a la vista navigation
        $categories= Category::all();
        return view('livewire.navigation',compact('categories'));
    }
}
