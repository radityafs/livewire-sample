<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ContactIndex extends Component
{

    public $data;

    protected $listeners = [
        'contactStored' => 'handleStored',
        'contactEdited' => 'handleEdited',
    ];


    public function render()
    {
        $this->data = Contact::latest()->get();

        return view('livewire.contact-index');
    }

    public function handleEdit($id)
    {
        if ($id != null && $id != "") {
            $contact = Contact::find($id);
            $this->emit('getContact', $contact);
        }
    }

    public function handleDelete($id)
    {
        if ($id != null && $id != "") {
            Contact::destroy($id);

            $this->render();

            Session::flash('message', 'Contact deleted successfully.');
        }
    }

    public function handleEdited()
    {
        Session::flash('message', 'Contact edited successfully.');
    }

    public function handleStored()
    {
        Session::flash('message', 'Contact stored successfully.');
    }
}
