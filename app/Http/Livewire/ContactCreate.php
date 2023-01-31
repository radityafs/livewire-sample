<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactCreate extends Component
{

    public $contactId;
    public $name;
    public $phone;

    protected $listeners = ['getContact' => 'showContact'];

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);

        if ($this->contactId != null && $this->contactId != "") {
            $contact = Contact::find($this->contactId);
            $contact->update([
                'name' => $this->name,
                'phone' => $this->phone,
            ]);

            $this->emit('contactEdited');
        } else {
            Contact::create([
                'name' => $this->name,
                'phone' => $this->phone,
            ]);

            $this->emit('contactStored');
        }


        $this->contactId = null;
        $this->name = '';
        $this->phone = '';
    }

    public function showContact($contact)
    {
        $this->contactId = $contact['id'];
        $this->name = $contact['name'];
        $this->phone = $contact['phone'];
    }

    public function render()
    {
        return view('livewire.contact-create');
    }
}
