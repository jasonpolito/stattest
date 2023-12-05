<?php

namespace App\Livewire;

use Livewire\Component;

class DedicatedSearchPage extends Component
{
    public $query;

    protected $queryString = [
        'query' => ['except' => '', 'as' => 'q'],
    ];

    public function render()
    {
        return view('livewire.dedicated-search-page');
    }
}
