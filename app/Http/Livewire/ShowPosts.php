<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{
    public $title;
    public $content;

//    public function mount()
//    {
//        $this->title = 'dengzhiqui';
//
//        $this->content = 'fdfdfdf';
//    }
    public function render()
    {
        return view('livewire.show-posts');
    }
}
