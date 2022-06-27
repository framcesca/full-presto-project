<?php

namespace App\Http\Livewire;
use App\Models\Ad;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AuthorAds extends Component
{

    use WithPagination;

    public $author;

    // Da visionare!!!
    // public function mount($author) {
    //     $ads = Ad::where("is_accepted", $author->id)->paginate(6)->get();
    //     $this->ads = $ads;
    //     // dd($this->ads);
    // }

    public function render()
    {
        $id = $this->author->id;
        return view('livewire.author-ads', [
            "ads" => Ad::where("user_id", $id)->paginate(6)
        ]);
    }

    protected $paginationTheme = 'bootstrap';

}