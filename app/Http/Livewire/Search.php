<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class Search extends Component
{
    public $search;
    public $search_results =[];

    public function updatedSearch($new_value)
    {
        $resp=Contact::where('name','LIKE','%'. $this->search .'%')->get();
        $this->search_results = $resp;
    }
    public function render()
    {
        return view('livewire.search');
    }
}
