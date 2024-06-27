<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $title = 'Post title...';
    public $posts =[
        ['id' => 1, 'title' => 'First Post'],
        ['id' => 2, 'title' => 'Second Post'],
        ['id' => 3, 'title' => 'Third Post'],
    ];
    public function render()
    {
        return view('livewire.create-post');
    }
}
