<?php

namespace App\Livewire\Admin\Member;

use App\Models\Member;
use Livewire\Component;

class DeleteMember extends Component
{
    public $member ;

    protected $listeners = ['deleteMember'];
    public function deleteMember($id): void
    {
        $this->dispatch('modalToggle', ['modalId' => 'deleteModal']);
        $this->member = Member::find($id);
    }

    public function submit(): void
    {
        $file =storage_path('app/public/' . $this->member->image);
        if(file_exists($file)) {
            unlink(storage_path('app/public/' . $this->member->image));
        }
        $this->member->delete();
        $this->dispatch('modalToggle', ['modalId' => 'deleteModal']);
        $this->dispatch('refreshData')->to(MemberData::class);

    }
    public function render()
    {
        return view('admin.member.delete-member');
    }
}
