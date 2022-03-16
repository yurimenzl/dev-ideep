<?php

namespace App\Http\Livewire\TestQuestion;

use App\Models\Test;
use App\Models\TestQuestion;
use Livewire\Component;

class Create extends Component
{
    public array $listsForFields = [];

    public TestQuestion $testQuestion;

    public function mount(TestQuestion $testQuestion)
    {
        $this->testQuestion = $testQuestion;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.test-question.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testQuestion->save();

        return redirect()->route('admin.test-questions.index');
    }

    protected function rules(): array
    {
        return [
            'testQuestion.question_number' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'testQuestion.title' => [
                'string',
                'required',
            ],
            'testQuestion.answer_1' => [
                'string',
                'required',
            ],
            'testQuestion.answer_2' => [
                'string',
                'required',
            ],
            'testQuestion.answer_3' => [
                'string',
                'nullable',
            ],
            'testQuestion.answer_4' => [
                'string',
                'nullable',
            ],
            'testQuestion.answer_5' => [
                'string',
                'nullable',
            ],
            'testQuestion.correct_answer' => [
                'required',
                'in:' . implode(',', array_keys($this->listsForFields['correct_answer'])),
            ],
            'testQuestion.test_id' => [
                'integer',
                'exists:tests,id',
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['correct_answer'] = $this->testQuestion::CORRECT_ANSWER_SELECT;
        $this->listsForFields['test']           = Test::pluck('name', 'id')->toArray();
    }
}
