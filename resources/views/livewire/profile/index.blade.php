<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('profile_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Profile" format="csv" />
                <livewire:excel-export model="Profile" format="xlsx" />
                <livewire:excel-export model="Profile" format="pdf" />
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
                            {{ trans('cruds.profile.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.profile.fields.name') }}
                            @include('components.table.sort', ['field' => 'name'])
                        </th>
                        <th>
                            {{ trans('cruds.profile.fields.description') }}
                            @include('components.table.sort', ['field' => 'description'])
                        </th>
                        <th>
                            {{ trans('cruds.profile.fields.summary') }}
                            @include('components.table.sort', ['field' => 'summary'])
                        </th>
                        <th>
                            {{ trans('cruds.profile.fields.sales') }}
                            @include('components.table.sort', ['field' => 'sales'])
                        </th>
                        <th>
                            {{ trans('cruds.profile.fields.leadership') }}
                            @include('components.table.sort', ['field' => 'leadership'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($profiles as $profile)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $profile->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $profile->id }}
                            </td>
                            <td>
                                {{ $profile->name }}
                            </td>
                            <td>
                                {{ $profile->description }}
                            </td>
                            <td>
                                {{ $profile->summary }}
                            </td>
                            <td>
                                {{ $profile->sales }}
                            </td>
                            <td>
                                {{ $profile->leadership }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('profile_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.profiles.show', $profile) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('profile_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.profiles.edit', $profile) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('profile_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $profile->id }})" wire:loading.attr="disabled">
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
            {{ $profiles->links() }}
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