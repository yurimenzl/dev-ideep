<?php

namespace App\Http\Livewire\TestSend;

use App\Models\Colaborator;
use App\Models\Test;
use App\Models\TestSend;
use Livewire\Component;

class Edit extends Component
{
    public TestSend $testSend;

    public array $listsForFields = [];

    public function mount(TestSend $testSend)
    {
        $this->testSend = $testSend;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.test-send.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testSend->save();

        return redirect()->route('admin.test-sends.index');
    }

    protected function rules(): array
    {
        return [
            'testSend.active' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['active'])),
            ],
            'testSend.colaborator_id' => [
                'integer',
                'exists:colaborators,id',
                'required',
            ],
            'testSend.test_id' => [
                'integer',
                'exists:tests,id',
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['active']      = $this->testSend::ACTIVE_RADIO;
        $this->listsForFields['colaborator'] = Colaborator::pluck('name', 'id')->toArray();
        $this->listsForFields['test']        = Test::pluck('name', 'id')->toArray();
    }
}
