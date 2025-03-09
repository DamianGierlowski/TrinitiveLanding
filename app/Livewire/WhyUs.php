<?php

namespace App\Livewire;

use Livewire\Component;

class WhyUs extends Component
{
    public $principles = [
        [
            'title' => 'Innovation',
            'description' => 'Pioneering solutions that transform challenges into opportunities, keeping you ahead in a rapidly evolving digital landscape.',
            'icon' => 'lightbulb'
        ],
        [
            'title' => 'Reliability',
            'description' => 'Consistent excellence in delivery, backed by robust processes and unwavering commitment to quality standards.',
            'icon' => 'shield'
        ],
        [
            'title' => 'Partnership',
            'description' => 'Building lasting relationships through collaborative engagement, ensuring your success is our success.',
            'icon' => 'handshake'
        ]
    ];

    public function render()
    {
        return view('livewire.why-us');
    }
}
