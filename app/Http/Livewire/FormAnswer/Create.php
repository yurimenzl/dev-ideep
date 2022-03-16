<?php

namespace App\Http\Livewire\FormAnswer;

use App\Models\Colaborator;
use App\Models\FormAnswer;
use Livewire\Component;

class Create extends Component
{
    public FormAnswer $formAnswer;

    public array $listsForFields = [];

    public function mount(FormAnswer $formAnswer)
    {
        $this->formAnswer = $formAnswer;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.form-answer.create');
    }

    public function submit()
    {
        $this->validate();

        $this->formAnswer->save();

        return redirect()->route('admin.form-answers.index');
    }

    protected function rules(): array
    {
        return [
            'formAnswer.question_number' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'formAnswer.question_plus' => [
                'string',
                'required',
            ],
            'formAnswer.question_minus' => [
                'string',
                'required',
            ],
            'formAnswer.colaborator_id' => [
                'integer',
                'exists:colaborators,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['colaborator'] = Colaborator::pluck('name', 'id')->toArray();
    }
}
