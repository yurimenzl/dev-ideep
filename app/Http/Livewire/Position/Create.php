<?php

namespace App\Http\Livewire\Position;

use App\Models\Company;
use App\Models\Position;
use Livewire\Component;

class Create extends Component
{
    public Position $position;

    public array $listsForFields = [];

    public function mount(Position $position)
    {
        $this->position = $position;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.position.create');
    }

    public function submit()
    {
        $this->validate();

        $this->position->save();

        return redirect()->route('admin.positions.index');
    }

    protected function rules(): array
    {
        return [
            'position.name' => [
                'string',
                'required',
            ],
            'position.description' => [
                'string',
                'required',
            ],
            'position.dominance' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'position.influence' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'position.stability' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'position.conformity' => [
                'integer',
                'min:-2147483648',
                'max:2147483647',
                'required',
            ],
            'position.company_id' => [
                'integer',
                'exists:companies,id',
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['company'] = Company::pluck('name', 'id')->toArray();
    }
}
