<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact as ContactModel;

class Contact extends Component
{

    public string $name = '';
    public string $phone = '';

    public string $message = '';
    public function render()
    {
        return view('livewire.contact');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|min:3|max:255',
            'phone' => 'required|min:12|max:12',
            'message' => 'required|min:3|max:300'
        ]);

        ContactModel::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'message' => $this->message,
            'ip_address' => request()->ip() ?? null
        ]);

        $this->reset();

        session()->flash('message', 'Xabaringiz Qoldirildi!');
    }
}
