<?php

namespace App\Http\Livewire\Profile;

use App\Models\Profile;
use Livewire\Component;

class Edit extends Component
{
    public Profile $profile;

    public function mount(Profile $profile)
    {
        $this->profile = $profile;
    }

    public function render()
    {
        return view('livewire.profile.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->profile->save();

        return redirect()->route('admin.profiles.index');
    }

    protected function rules(): array
    {
        return [
            'profile.name' => [
                'string',
                'required',
            ],
            'profile.description' => [
                'string',
                'required',
            ],
            'profile.summary' => [
                'string',
                'nullable',
            ],
            'profile.sales' => [
                'string',
                'nullable',
            ],
            'profile.leadership' => [
                'string',
                'required',
            ],
        ];
    }
}
