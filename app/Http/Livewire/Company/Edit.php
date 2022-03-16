<?php

namespace App\Http\Livewire\Company;

use App\Models\City;
use App\Models\Company;
use App\Models\Country;
use App\Models\CurrencyPlan;
use Livewire\Component;

class Edit extends Component
{
    public Company $company;

    public array $listsForFields = [];

    public function mount(Company $company)
    {
        $this->company = $company;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.company.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->company->save();

        return redirect()->route('admin.companies.index');
    }

    protected function rules(): array
    {
        return [
            'company.name' => [
                'string',
                'min:3',
                'max:120',
                'required',
            ],
            'company.email' => [
                'email:rfc',
                'required',
            ],
            'company.taxid' => [
                'string',
                'min:14',
                'max:14',
                'required',
            ],
            'company.segment' => [
                'string',
                'nullable',
            ],
            'company.sector' => [
                'string',
                'nullable',
            ],
            'company.phone' => [
                'string',
                'min:10',
                'max:11',
                'nullable',
            ],
            'company.country_id' => [
                'integer',
                'exists:countries,id',
                'nullable',
            ],
            'company.city_id' => [
                'integer',
                'exists:cities,id',
                'required',
            ],
            'company.plan_type_id' => [
                'integer',
                'exists:currency_plans,id',
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['country']   = Country::pluck('name', 'id')->toArray();
        $this->listsForFields['city']      = City::pluck('name', 'id')->toArray();
        $this->listsForFields['plan_type'] = CurrencyPlan::pluck('name', 'id')->toArray();
    }
}
