<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactUsComponent extends Component
{
    public $name;
    public $email;
    public $comment;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required'
        ]);
    }

    public function sendMessage()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required'
        ]);

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->comment = $this->comment;
        $contact->save();
        session()->flash('message', 'Hvala, Vasa poruka je poslana');

    }

    public function render()
    {
        return view('livewire.contact-us-component')->layout('layouts.base');
    }

}
