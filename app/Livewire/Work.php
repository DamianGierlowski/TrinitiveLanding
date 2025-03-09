<?php

namespace App\Livewire;

use Livewire\Component;

class Work extends Component
{
    public $projects = [
        [
            'name' => 'PhotoHub SaaS',
            'description' => 'Professional photographer management platform',
            'image' => '/placeholder.svg'
        ],
        [
            'name' => 'BudgetPro iOS',
            'description' => 'Personal finance tracking application',
            'image' => '/placeholder.svg'
        ],
        [
            'name' => 'CacheFlow',
            'description' => 'High-performance caching solution',
            'image' => '/placeholder.svg'
        ]
    ];

    public function render()
    {
        return view('livewire.work');
    }
}
