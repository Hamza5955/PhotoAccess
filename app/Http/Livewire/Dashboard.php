<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Dashboard extends Component
{
    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        $products = Product::all();

//        dd($products[0]->photo->getFullUrl());

        $query = Media::where('collection_name', 'photo')
            ->where(function ($query){
            $query->where('name','like', '%' . $this->search . '%');
        })->get();

//        dd($photos[0]->getUrl());
        $photos = [];
        foreach ($query as $media)
        {
            array_push($photos, $media->getUrl());
        }

        return view('livewire.dashboard', compact('photos'));
    }
}
