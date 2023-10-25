<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class DataTable extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.data-table',
    ['contacts'=>\App\Models\Contact::paginate(10)]);
    }
}
