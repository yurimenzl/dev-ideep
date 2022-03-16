<?php

namespace App\Http\Livewire\Test;

use App\Models\Company;
use App\Models\Test;
use Livewire\Component;

class Edit extends Component
{
    public Test $test;

    public array $listsForFields = [];

    public function mount(Test $test)
    {
        $this->test = $test;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->test->save();

        return redirect()->route('admin.tests.index');
    }

    protected function rules(): array
    {
        return [
            'test.name' => [
                'string',
                'min:3',
                'max:120',
                'required',
            ],
            'test.type' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['type'])),
            ],
            'test.time' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'test.weight' => [
                'numeric',
                'required',
            ],
            'test.number_questions' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'test.company_id' => [
                'integer',
                'exists:companies,id',
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['type']    = $this->test::TYPE_SELECT;
        $this->listsForFields['company'] = Company::pluck('name', 'id')->toArray();
    }
}
