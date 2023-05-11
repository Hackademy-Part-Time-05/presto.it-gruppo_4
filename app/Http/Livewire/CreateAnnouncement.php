<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateAnnouncement extends Component {

    public $title;
    public $body;
    public $price;
    public $category;

    protected $rules = [
        'title' => 'required|min:4',
        'body' => 'required|min:8',
        'price' => 'required|numeric|digits_between:0,8',
        'category' => 'required',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è richiesto',
        'min' => 'Il campo :attribute è troppo corto',
        'numeric' => 'Il campo :attribute dev\'essere un numero',
        'digits_between' => 'Il campo :attribute può contenere al massimo 8 cifre',
    ];

    public function store() {

        $this->validate(); //

        $category = Category::find($this->category);
        $announcement = $category->announcements()->create([
            'title' => $this->title,
            'body' => $this->body,
            'price' => $this->price,
        ]);

        Auth::user()->announcements()->save($announcement);

        session()->flash('message', 'Annuncio inserito con successo');
        $this->cleanForm();
    }

    public function cleanForm() {
        $this->title = '';
        $this->body = '';
        $this->price = '';
        $this->category = '';
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function render() {
        return view('livewire.create-announcement');
    }
}
