<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class AdForm extends Component
{

    public $title;
    public $description;
    public $price;
    public $category;

    public function submitAd() {
        $category = Category::find($this->category);
            $ads = $category->ads()->create([
            "title"=>$this->title,
            "description"=>$this->description,
            "price"=>$this->price,
            // "category"=>$this->category
        ]);
        // dd($ads);
        Auth::user()->ads()->save($ads);
        session()->flash('message','Grazie per aver inserito il nuo annuncio');
    }

    public function render()
    {
        return view('livewire.ad-form');
    }
}