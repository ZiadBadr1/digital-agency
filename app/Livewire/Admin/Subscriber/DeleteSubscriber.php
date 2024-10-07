<?php

namespace App\Livewire\Admin\Subscriber;

use App\Models\Skill;
use App\Models\Subscriber;
use Livewire\Component;

class DeleteSubscriber extends Component
{
    public $subscriber ;
    protected $listeners = ['deleteSubscriber'];
    public function deleteSubscriber($id): void
    {
        $this->subscriber = Subscriber::find($id);
        $this->dispatch('modalToggle', ['modalId' => 'deleteModal']);
    }
    public function submit(): void
    {
        $this->subscriber->delete();
        $this->dispatch('modalToggle', ['modalId' => 'deleteModal']);
        $this->dispatch('refreshData')->to(SubscriberData::class);
    }
    public function render()
    {
        return view('admin.subscriber.delete-subscriber');
    }
}
