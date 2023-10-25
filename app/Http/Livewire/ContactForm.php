<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $contacts;
    
    public $successMessage;

    protected $rules=[
        'name' => 'required|min:6',
        'email' => 'required|email',
        'contacts' => 'required|min:10'
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function submitForm()
    {
        $contact = $this->validate();
        $contact['name'] = $this->name;
        $contact['email'] = $this->email;
        $contact['contacts'] = $this->contacts;
        Contact::create($contact);
        $this->successMessage = 'We received your message successfully and will get back to you shortly!';
        $this->reset(['name', 'email', 'contacts']);
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
