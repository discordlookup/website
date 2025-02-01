<?php

namespace App\Http\Livewire\Discovery;

use Livewire\Component;

class Clans extends Component
{
    public function render()
    {
        return view('discovery.clans')->extends('layouts.app');
    }
}
