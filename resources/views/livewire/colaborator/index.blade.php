<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('colaborator_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Colaborator" format="csv" />
                <livewire:excel-export model="Colaborator" format="xlsx" />
                <livewire:excel-export model="Colaborator" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.colaborator.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.colaborator.fields.name') }}
                            @include('components.table.sort', ['field' => 'name'])
                        </th>
                        <th>
                            {{ trans('cruds.colaborator.fields.gender') }}
                            @include('components.table.sort', ['field' => 'gender'])
                        </th>
                        <th>
                            {{ trans('cruds.colaborator.fields.email') }}
                            @include('components.table.sort', ['field' => 'email'])
                        </th>
                        <th>
                            {{ trans('cruds.colaborator.fields.work_company') }}
                            @include('components.table.sort', ['field' => 'work_company'])
                        </th>
                        <th>
                            {{ trans('cruds.colaborator.fields.phone') }}
                            @include('components.table.sort', ['field' => 'phone'])
                        </th>
                        <th>
                            {{ trans('cruds.colaborator.fields.position') }}
                            @include('components.table.sort', ['field' => 'position'])
                        </th>
                        <th>
                            {{ trans('cruds.colaborator.fields.company') }}
                            @include('components.table.sort', ['field' => 'company.name'])
                        </th>
                        <th>
                            {{ trans('cruds.colaborator.fields.country') }}
                            @include('components.table.sort', ['field' => 'country.name'])
                        </th>
                        <th>
                            {{ trans('cruds.colaborator.fields.city') }}
                            @include('components.table.sort', ['field' => 'city.name'])
                        </th>
                        <th>
                            {{ trans('cruds.colaborator.fields.profile') }}
                            @include('components.table.sort', ['field' => 'profile.name'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($colaborators as $colaborator)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $colaborator->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $colaborator->id }}
                            </td>
                            <td>
                                {{ $colaborator->name }}
                            </td>
                            <td>
                                {{ $colaborator->gender_label }}
                            </td>
                            <td>
                                <a class="link-light-blue" href="mailto:{{ $colaborator->email }}">
                                    <i class="far fa-envelope fa-fw">
                                    </i>
                                    {{ $colaborator->email }}
                                </a>
                            </td>
                            <td>
                                {{ $colaborator->work_company }}
                            </td>
                            <td>
                                {{ $colaborator->phone }}
                            </td>
                            <td>
                                {{ $colaborator->position }}
                            </td>
                            <td>
                                @if($colaborator->company)
                                    <span class="badge badge-relationship">{{ $colaborator->company->name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($colaborator->country)
                                    <span class="badge badge-relationship">{{ $colaborator->country->name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($colaborator->city)
                                    <span class="badge badge-relationship">{{ $colaborator->city->name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($colaborator->profile)
                                    <span class="badge badge-relationship">{{ $colaborator->profile->name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('colaborator_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.colaborators.show', $colaborator) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('colaborator_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.colaborators.edit', $colaborator) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('colaborator_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $colaborator->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $colaborators->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush