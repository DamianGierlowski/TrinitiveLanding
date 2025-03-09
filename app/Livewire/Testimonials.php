<?php

namespace App\Livewire;

use Livewire\Component;

class Testimonials extends Component
{
    public $testimonials = [
        [
            'name' => 'Sarah Johnson',
            'position' => 'CEO, TechStart',
            'quote' => 'Trinitive delivered our project on time and exceeded our expectations. Their team\'s expertise is unmatched.',
            'avatar' => '/placeholder.svg'
        ]
    ];
    public function render()
    {
        return view('livewire.testimonials');
    }
}
