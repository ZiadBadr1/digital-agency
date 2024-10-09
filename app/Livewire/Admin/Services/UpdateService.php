<?php

namespace App\Livewire\Admin\Services;

use App\Http\Requests\Admin\Service\ServiceRequest;
use App\Models\Service;
use Livewire\Component;

class UpdateService extends Component
{
    public $service ,$name , $description , $icon;

    protected $listeners = ['updateService'];

    public function updateService($id): void
    {
        $this->service = Service::find($id);
        $this->name = $this->service->name;
        $this->description = $this->service->description;
        $this->icon = $this->service->icon;
        $this->resetValidation();
        $this->dispatch('modalToggle', ['modalId' => 'updateModal']);
    }

    public function submit(): void
    {
        $attributes =  $this->validate((new ServiceRequest())->rules());
        $this->service->update($attributes);
        $this->dispatch('modalToggle', ['modalId' => 'updateModal']);
        $this->dispatch('refreshData')->to(ServiceData::class);
    }
    public function render()
    {
        return view('admin.services.update-service');
    }
}
