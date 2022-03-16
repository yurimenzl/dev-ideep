<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('position_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Position" format="csv" />
                <livewire:excel-export model="Position" format="xlsx" />
                <livewire:excel-export model="Position" format="pdf" />
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
                            {{ trans('cruds.position.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.position.fields.name') }}
                            @include('components.table.sort', ['field' => 'name'])
                        </th>
                        <th>
                            {{ trans('cruds.position.fields.description') }}
                            @include('components.table.sort', ['field' => 'description'])
                        </th>
                        <th>
                            {{ trans('cruds.position.fields.dominance') }}
                            @include('components.table.sort', ['field' => 'dominance'])
                        </th>
                        <th>
                            {{ trans('cruds.position.fields.influence') }}
                            @include('components.table.sort', ['field' => 'influence'])
                        </th>
                        <th>
                            {{ trans('cruds.position.fields.stability') }}
                            @include('components.table.sort', ['field' => 'stability'])
                        </th>
                        <th>
                            {{ trans('cruds.position.fields.conformity') }}
                            @include('components.table.sort', ['field' => 'conformity'])
                        </th>
                        <th>
                            {{ trans('cruds.position.fields.company') }}
                            @include('components.table.sort', ['field' => 'company.name'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($positions as $position)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $position->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $position->id }}
                            </td>
                            <td>
                                {{ $position->name }}
                            </td>
                            <td>
                                {{ $position->description }}
                            </td>
                            <td>
                                {{ $position->dominance }}
                            </td>
                            <td>
                                {{ $position->influence }}
                            </td>
                            <td>
                                {{ $position->stability }}
                            </td>
                            <td>
                                {{ $position->conformity }}
                            </td>
                            <td>
                                @if($position->company)
                                    <span class="badge badge-relationship">{{ $position->company->name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('position_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.positions.show', $position) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('position_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.positions.edit', $position) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('position_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $position->id }})" wire:loading.attr="disabled">
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
            {{ $positions->links() }}
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