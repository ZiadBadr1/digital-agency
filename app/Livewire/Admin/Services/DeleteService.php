<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class DeleteService extends Component
{
    public $service ;

    protected $listeners = ['deleteService'];
    public function deleteService($id): void
    {
        $this->dispatch('modalToggle', ['modalId' => 'deleteModal']);
        $this->service = Service::find($id);
    }

    public function submit(): void
    {
        $this->service->delete();
        $this->dispatch('modalToggle', ['modalId' => 'deleteModal']);
        $this->dispatch('refreshData')->to(ServiceData::class);

    }
    public function render()
    {
        return view('admin.services.delete-service');
    }
}
