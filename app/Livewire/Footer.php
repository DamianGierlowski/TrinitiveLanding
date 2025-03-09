<?php

namespace App\Livewire;

use App\Mail\ContactFormMail;
use Exception;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Footer extends Component
{
    public $email = '';
    public $message = '';
    public $successMessage = '';
    public $errorMessage = '';

    protected $rules = [
        'email' => 'required|email',
        'message' => 'required|min:10|max:1000',
    ];

    public function sendMessage()
    {
        $this->successMessage = '';
        $this->errorMessage = '';

        $this->validate();

        try {
            // Send email to the company
            Mail::to('damian.gierlowski@gmail.com')
                ->send(new ContactFormMail($this->email, $this->message));

            $this->successMessage = 'Your message has been sent successfully! We will get back to you soon.';
            $this->reset(['email', 'message']);
        } catch (Exception $e) {
            $this->errorMessage = 'Sorry, there was a problem sending your message. Please try again later.';
            // Log the error for debugging
            logger()->error('Contact form error: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.footer');
    }
}
