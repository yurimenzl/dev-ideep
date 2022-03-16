<?php

namespace App\Http\Livewire\FormQuestion;

use App\Models\FormQuestion;
use Livewire\Component;

class Edit extends Component
{
    public FormQuestion $formQuestion;

    public function mount(FormQuestion $formQuestion)
    {
        $this->formQuestion = $formQuestion;
    }

    public function render()
    {
        return view('livewire.form-question.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->formQuestion->save();

        return redirect()->route('admin.form-questions.index');
    }

    protected function rules(): array
    {
        return [
            'formQuestion.number' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'formQuestion.characteristic' => [
                'string',
                'required',
            ],
            'formQuestion.value' => [
                'string',
                'min:1',
                'max:1',
                'required',
            ],
        ];
    }
}
