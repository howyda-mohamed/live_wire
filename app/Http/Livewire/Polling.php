<?php

namespace App\Http\Livewire;

use App\Models\order;
use Livewire\Component;

class Polling extends Component
{
    public $sum;

    public function mount()
    {
        $this->sum=$this->getSum();
    }
    public function getSum()
    {
        $this->sum =order::sum("price");

        return $this->sum;
    }
    public function render()
    {
        return view('livewire.polling');
    }
}
