<?php

namespace App\Http\Livewire\Colaborator;

use App\Models\City;
use App\Models\Colaborator;
use App\Models\Company;
use App\Models\Country;
use App\Models\Profile;
use Livewire\Component;

class Edit extends Component
{
    public Colaborator $colaborator;

    public array $listsForFields = [];

    public function mount(Colaborator $colaborator)
    {
        $this->colaborator = $colaborator;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.colaborator.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->colaborator->save();

        return redirect()->route('admin.colaborators.index');
    }

    protected function rules(): array
    {
        return [
            'colaborator.name' => [
                'string',
                'min:3',
                'max:120',
                'required',
            ],
            'colaborator.gender' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['gender'])),
            ],
            'colaborator.email' => [
                'email:rfc',
                'required',
            ],
            'colaborator.work_company' => [
                'string',
                'min:3',
                'max:128',
                'nullable',
            ],
            'colaborator.phone' => [
                'string',
                'min:10',
                'max:11',
                'nullable',
            ],
            'colaborator.position' => [
                'string',
                'min:3',
                'max:128',
                'nullable',
            ],
            'colaborator.company_id' => [
                'integer',
                'exists:companies,id',
                'required',
            ],
            'colaborator.country_id' => [
                'integer',
                'exists:countries,id',
                'required',
            ],
            'colaborator.city_id' => [
                'integer',
                'exists:cities,id',
                'required',
            ],
            'colaborator.profile_id' => [
                'integer',
                'exists:profiles,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['gender']  = $this->colaborator::GENDER_SELECT;
        $this->listsForFields['company'] = Company::pluck('name', 'id')->toArray();
        $this->listsForFields['country'] = Country::pluck('name', 'id')->toArray();
        $this->listsForFields['city']    = City::pluck('name', 'id')->toArray();
        $this->listsForFields['profile'] = Profile::pluck('name', 'id')->toArray();
    }
}
