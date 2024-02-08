<?php

namespace App\Livewire;

use App\Livewire\Forms\CreatePostForm;
use App\Models\Posts;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CreatePost extends Component
{
    public CreatePostForm $formData;

    public function store()
    {
        $this->validate();

        Posts::create([
            'user_id' => auth()->user()->id,
            'title' => $this->formData->title,
            'description' => $this->formData->description
        ]);

        return $this->redirect(route('posts.create'));
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.create-post');
    }
}
