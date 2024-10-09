<?php

namespace App\Livewire\Admin\Services;

use App\Http\Requests\Admin\Service\ServiceRequest;
use App\Models\Service;
use Livewire\Component;

class CreateService extends Component
{
    public $name ,$description ,$icon;

    public function submit()
    {
        $attributes = $this->validate((new ServiceRequest())->rules());
        Service::create($attributes);
        $this->reset(['name','description','icon']);
        $this->dispatch('modalToggle', ['modalId' => 'createModal']);
        $this->dispatch('refreshData')->to(ServiceData::class);
    }
    public function render()
    {
        return view('admin.services.create-service');
    }
}
