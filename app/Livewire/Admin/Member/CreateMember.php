<?php

namespace App\Livewire\Admin\Member;

use App\Actions\Images\StoreImageAction;
use App\Http\Requests\MemberRequest;
use App\Models\Member;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateMember extends Component
{
    use WithFileUploads;
    public $name ,  $image , $position , $facebook , $twitter , $linkedin ,$instagram ;

    public function submit(): void
    {
        $attributes = $this->validate((new MemberRequest())->rules());
        if($attributes['image']) {
            $attributes['image'] = (new StoreImageAction())->execute($attributes['image'], 'Members/');
        }
        Member::create($attributes);
        $this->reset('name' , 'position', 'image', 'facebook', 'twitter', 'linkedin', 'instagram');
        $this->dispatch('modalToggle', ['modalId' => 'createModal']);
        $this->dispatch('refreshData')->to(MemberData::class);
    }

    public function render()
    {
        return view('admin.member.create-member');
    }
}
