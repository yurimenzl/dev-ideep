<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use Livewire\Component;

class Edit extends Component
{
    public City $city;

    public function mount(City $city)
    {
        $this->city = $city;
    }

    public function render()
    {
        return view('livewire.city.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->city->save();

        return redirect()->route('admin.cities.index');
    }

    protected function rules(): array
    {
        return [
            'city.name' => [
                'string',
                'nullable',
            ],
            'city.state' => [
                'string',
                'nullable',
            ],
        ];
    }
}
