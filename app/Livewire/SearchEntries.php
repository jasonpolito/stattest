<?php

namespace App\Livewire;

use Livewire\Component;

class SearchEntries extends Component
{
    public $query;
    public $services;
    public $entrytype;

    protected $queryString = [
        'query' => ['except' => ''],
        'services' => ['except' => []],
    ];

    public function clearQuery()
    {
        $this->query = '';
    }

    public function render()
    {
        return view('livewire.search-entries');
    }
}
