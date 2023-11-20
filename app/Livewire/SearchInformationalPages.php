<?php

namespace App\Livewire;

use Livewire\Component;
use Statamic\Statamic;

class SearchInformationalPages extends Component
{
    public $uri;
    public $query;
    protected $queryString = [
        'query' => ['except' => '']
    ];

    public function clearQuery()
    {
        $this->query = '';
    }

    public function render()
    {

        $results = Statamic::tag('nav:collection:informational_pages')
            ->where('title', 'like', "%$this->query%")
            ->maxDepth(1)
            ->from($this->uri)
            ->fetch();

        return view('livewire.search-informational-pages', [
            'results' => $results
        ]);
    }
}
