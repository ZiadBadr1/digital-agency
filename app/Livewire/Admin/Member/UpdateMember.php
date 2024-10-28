<?php

namespace App\Livewire\Admin\Member;

use App\Actions\Images\StoreImageAction;
use App\Http\Requests\MemberRequest;
use App\Models\Member;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateMember extends Component
{
    use WithFileUploads;
    public $member ,$name ,  $image , $position , $temporaryImage , $facebook , $twitter , $linkedin ,$instagram;
    protected $listeners =['updateMember'];


    public function updateMember($id):void
    {
        $this->member = Member::find($id);
        $this->name = $this->member->name;
        $this->position = $this->member->position;
        $this->facebook = $this->member->facebook;
        $this->twitter = $this->member->twitter;
        $this->linkedin = $this->member->linkedin;
        $this->instagram = $this->member->instagram;
        $this->image = $this->member->image();
        $this->resetValidation();
        $this->dispatch('modalToggle', ['modalId' => 'updateModal']);
    }

    public function updatedTemporaryImage(): void
    {
        $this->validate([
            'temporaryImage' => ['nullable','mimes:jpg,png,jpeg'],
        ]);
        $this->image = $this->temporaryImage;
    }
    public function submit():void
    {
        $attributes = $this->validate((new MemberRequest())->rules());
        if($this->temporaryImage)
        {
            $file =storage_path('app/public/' . $this->member->image);
            if(file_exists($file))
                unlink(storage_path('app/public/' . $this->member->image));
            $attributes['image'] = (new StoreImageAction())->execute($this->temporaryImage,'Members/');
        }else
        {
            unset($attributes['image']);
        }
        $this->member->update($attributes);
        $this->reset('temporaryImage');
        $this->dispatch('modalToggle', ['modalId' => 'updateModal']);
        $this->dispatch('refreshData')->to(MemberData::class);
    }

    public function render()
    {
        return view('admin.member.update-member');
    }
}
