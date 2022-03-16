<?php

namespace App\Http\Livewire\CurrencyPlan;

use App\Models\CurrencyPlan;
use Livewire\Component;

class Create extends Component
{
    public array $listsForFields = [];

    public CurrencyPlan $currencyPlan;

    public function mount(CurrencyPlan $currencyPlan)
    {
        $this->currencyPlan = $currencyPlan;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.currency-plan.create');
    }

    public function submit()
    {
        $this->validate();

        $this->currencyPlan->save();

        return redirect()->route('admin.currency-plans.index');
    }

    protected function rules(): array
    {
        return [
            'currencyPlan.name' => [
                'string',
                'required',
            ],
            'currencyPlan.currency' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['currency'])),
            ],
            'currencyPlan.type' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['type'])),
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['currency'] = $this->currencyPlan::CURRENCY_SELECT;
        $this->listsForFields['type']     = $this->currencyPlan::TYPE_SELECT;
    }
}
