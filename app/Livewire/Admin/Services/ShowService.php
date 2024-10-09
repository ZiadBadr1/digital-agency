<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ShowService extends Component
{
    public $service ,$name , $description , $icon;
    protected $listeners = ['showService'];

    public function showService($id): void
    {
        $service = Service::find($id);
        $this->name = $service->name;
        $this->description = $service->description;
        $this->icon = $service->icon;
        $this->dispatch('modalToggle', ['modalId' => 'showModal']);
    }
    public function render()
    {
        return view('admin.services.show-service');
    }
}
