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

    protected $rules = [
        'title' => 'required|min:1|max:20',
        'description' => 'required|min:1|max:255',
        'price' => 'required|min:1|max:10',
        'category' => 'required|min:1'
    ];

    protected $messages = [
        'title.required' => 'Campo obbligatorio.',
        'title.max' => 'Hai raggiunto il numero massimo di caratteri.',
        'description.required' => 'Campo obbligatorio.',
        'description.max' => 'Hai raggiunto il numero massimo di caratteri.',
        'price.required' => 'Campo obbligatorio.',
        'price.max' => 'Hai raggiunto il numero massimo di caratteri.',
        'category.required' => 'Selezione obbligatoria.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitAd() {
        $validatedData = $this->validate();
        $category = Category::find($validatedData["category"]);
            $ads = $category->ads()->create([
            "title"=>$this->title,
            "description"=>$this->description,
            "price"=>$this->price
        ]);
        Auth::user()->ads()->save($ads);
        session()->flash('message','Grazie, il tuo annuncio sarà sottoposto a revisione.');
        $this->formCleaner();
    }

    public function formCleaner() {
        $this->title = "";
        $this->description = "";
        $this->price = "";
        $this->category = "";
    }

    public function render()
    {
        return view('livewire.ad-form');
    }

}