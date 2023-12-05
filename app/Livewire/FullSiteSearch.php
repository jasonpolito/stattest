<?php

namespace App\Livewire;

use Livewire\Component;

class FullSiteSearch extends Component
{
    public $query;

    public function render()
    {
        return view('livewire.full-site-search');
    }
}
