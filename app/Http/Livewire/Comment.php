<?php

namespace App\Http\Livewire;

use App\Models\Comment as ModelsComment;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Comment extends Component
{
    public $body;
    public $name;


    public $successMessage;



    public function submitForm()
    {
        $this->validate([
            'body' => 'required|min:6',
        ]);
        ModelsComment::create([
            'body' => $this->body,
            'name'=>"howyda"
        ]);
        
        $this->successMessage = "Comment submitted successfully.";
        $this->reset('body');

    }
    public function render()
    {
        return view('livewire.comment',[
            'comments'=>ModelsComment::all()
        ]);
    }
}
