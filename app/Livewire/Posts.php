<?php

namespace App\Livewire;

use App\Models\Posts as ModelsPosts;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Posts extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = ModelsPosts::get();
    }

    #[Layout('layouts.guest')]
    public function render()
    {
        return view('livewire.posts');
    }
}
