<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreatePostForm extends Form
{
    #[Validate('required|min:30|max:100')]
    public $title;
    #[Validate('required|min:200|max:1000')]
    public $description;
}
