<?php

namespace App\Livewire;

use Livewire\Component;

class SearchEntries extends Component
{
    public $query;
    public $entrytype;
    public $sortorder;
    public $cities = [];
    public $services = [];

    protected $queryString = [
        'query' => ['except' => '', 'as' => 'q'],
        'services' => ['except' => [], 'as' => 's'],
        'cities' => ['except' => [], 'as' => 'c'],
    ];

    public function clearSearch()
    {
        $this->query = '';
        $this->services = [];
        $this->cities = [];
    }

    public function render()
    {
        return view('livewire.search-entries');
    }
}
