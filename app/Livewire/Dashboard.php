<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('components.layouts.app.frontend')]
    public function render(): View
    {
        return view('livewire.dashboard');
    }
}
