<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\RemoveFaces;
use App\Jobs\WatermarkJob;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateAnnouncement extends Component {

    use WithFileUploads;

    public $title;
    public $body;
    public $price;
    public $category;
    public $images = [];
    public $temporary_images;
    public $announcement;

    protected $rules = [
        'title' => 'required|max:50|min:4',
        'body' => 'required|max:500|min:10',
        'category' => 'required',
        'price' => 'required|numeric|max:10000000',
        'temporary_images.*' => 'image|max:1024',
        'images.*' => 'image|max:1024',


    ];
    // protected $messages=[
    //     'required'=>'è richiesto un :attribute',
    //     'max'=>'troppo lungo ',
    //     'min'=>'troppo corto ',
    //     'numeric'=>'occhio inserisci un numero',
    //     'temporary_images.required' => 'L\'immagine è richiesta',
    //     'temporary_images.*.image' => 'I file devono essere immagini',
    //     'images.image' => 'Il file dev\'essere un\'immagine',
    //     'temporary_images.*.max' => 'L\'immagine dev\'essere massimo di 1mb',
    //     'images.max' => 'L\'immagine dev\'essere massimo di 1mb',


    // ];

    public function updatedTemporaryImages() {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key) {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function render() {
        return view('livewire.create-announcement');
    }
    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function store() {
        $this->validate();


        $this->announcement = Category::find($this->category)->announcements()->create($this->validate());
        if (count($this->images)) {

            foreach ($this->images as $image) {
                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path' => $image->store($newFileName, 'public')]);

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 400, 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                    new WatermarkJob($newImage->id),
                ])->dispatch($newImage->id);




            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }


        Auth::user()->announcements()->save($this->announcement);
        // $this->announcement->user()->associate(Auth::user());
        // $this->announcement=Category::find($this->category)->announcements()->create($this->validate());

        session()->flash('success', 'Annuncio creato correttamente');
        $this->cleanForm();
    }
    public function cleanForm() {
        $this->title = '';
        $this->body = '';
        $this->category = '';
        $this->price = '';
        $this->images = [];
        $this->temporary_images = [];
    }
}
