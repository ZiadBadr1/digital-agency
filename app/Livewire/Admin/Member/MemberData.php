<?php

namespace App\Livewire\Admin\Member;

use App\Models\Member;
use Livewire\Component;
use Livewire\WithPagination;

class MemberData extends Component
{
    use WithPagination;

    public $search ;
    protected $listeners = ['refreshData' => '$refresh'];

    public function updatingSearch():void
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('admin.member.member-data',[
            'data' => Member::where('name','like','%'.$this->search.'%')->paginate(10),
        ]);
    }
}
