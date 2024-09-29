<?php

namespace App\Livewire\Admin\Settings;

use App\Models\Setting;
use Livewire\Component;

class SettingComponent extends Component
{
    public $settings;
    public function mount(): void
    {
        $this->settings = Setting::first();
    }
    public function render()
    {
        return view('admin.settings.setting-component');
    }

    public function rules(): array
    {
        return [
            'settings.name' => 'required',
            'settings.address' => ['required'],
            'settings.phone' => ['required'],
            'settings.email' => ['required', 'email', 'max:254'],
            'settings.facebook' => ['required','url'],
            'settings.twitter' => ['required','url'],
            'settings.linkedin' => ['required','url'],
            'settings.instagram' => ['required','url'],
            'settings.logo' => ['nullable'],
        ];
    }
    public function submit(): void
    {
        $this->validate();
        $this->settings->save();
        session()->flash('message', 'Setting updated successfully.');
    }
}
