<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class SubmitContact extends Component
{

    use LivewireAlert;

    public $name, $email, $message;

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
    }
    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->message = null;
    }
    public function SendMessage()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        $contact = new Contact();
        $contact->email = $this->email;
        $contact->name = $this->name;
        $contact->message = $this->message;
        $contact->save();
        $this->resetInput();
        $this->alert('success', 'Send success message');
    }



    public function render()
    {
        return view('livewire.submit-contact');
    }
}
