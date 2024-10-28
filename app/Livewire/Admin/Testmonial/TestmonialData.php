<?php

namespace App\Livewire\Admin\Testmonial;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithPagination;

class TestmonialData extends Component
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
        return view('admin.testmonial.testmonial-data',[
            'data' => Testimonial::where('name','like','%'.$this->search.'%')->paginate(10),
        ]);
    }
}
