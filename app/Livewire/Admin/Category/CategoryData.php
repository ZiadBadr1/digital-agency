<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryData extends Component
{
    use WithPagination;
    public $search;
    protected $listeners = ['refreshData' => '$refresh'];

    public function updatingSearch():void
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.category.category-data',[
            'data' => Category::where('name','LIKE',"%{$this->search}%")->paginate(10),
        ]);
    }
}
