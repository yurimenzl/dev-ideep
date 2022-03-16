<?php

namespace App\Http\Livewire\ProfileData;

use App\Models\Profile;
use App\Models\ProfileData;
use Livewire\Component;

class Edit extends Component
{
    public ProfileData $profileData;

    public array $listsForFields = [];

    public function mount(ProfileData $profileData)
    {
        $this->profileData = $profileData;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.profile-data.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->profileData->save();

        return redirect()->route('admin.profile-datas.index');
    }

    protected function rules(): array
    {
        return [
            'profileData.dominance' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'profileData.influence' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'profileData.stability' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'profileData.conformity' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'profileData.profile_id' => [
                'integer',
                'exists:profiles,id',
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['profile'] = Profile::pluck('name', 'id')->toArray();
    }
}
