<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('test_question_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="TestQuestion" format="csv" />
                <livewire:excel-export model="TestQuestion" format="xlsx" />
                <livewire:excel-export model="TestQuestion" format="pdf" />
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
                            {{ trans('cruds.testQuestion.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.testQuestion.fields.question_number') }}
                            @include('components.table.sort', ['field' => 'question_number'])
                        </th>
                        <th>
                            {{ trans('cruds.testQuestion.fields.title') }}
                            @include('components.table.sort', ['field' => 'title'])
                        </th>
                        <th>
                            {{ trans('cruds.testQuestion.fields.answer_1') }}
                            @include('components.table.sort', ['field' => 'answer_1'])
                        </th>
                        <th>
                            {{ trans('cruds.testQuestion.fields.answer_2') }}
                            @include('components.table.sort', ['field' => 'answer_2'])
                        </th>
                        <th>
                            {{ trans('cruds.testQuestion.fields.answer_3') }}
                            @include('components.table.sort', ['field' => 'answer_3'])
                        </th>
                        <th>
                            {{ trans('cruds.testQuestion.fields.answer_4') }}
                            @include('components.table.sort', ['field' => 'answer_4'])
                        </th>
                        <th>
                            {{ trans('cruds.testQuestion.fields.answer_5') }}
                            @include('components.table.sort', ['field' => 'answer_5'])
                        </th>
                        <th>
                            {{ trans('cruds.testQuestion.fields.correct_answer') }}
                            @include('components.table.sort', ['field' => 'correct_answer'])
                        </th>
                        <th>
                            {{ trans('cruds.testQuestion.fields.test') }}
                            @include('components.table.sort', ['field' => 'test.name'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($testQuestions as $testQuestion)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $testQuestion->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $testQuestion->id }}
                            </td>
                            <td>
                                {{ $testQuestion->question_number }}
                            </td>
                            <td>
                                {{ $testQuestion->title }}
                            </td>
                            <td>
                                {{ $testQuestion->answer_1 }}
                            </td>
                            <td>
                                {{ $testQuestion->answer_2 }}
                            </td>
                            <td>
                                {{ $testQuestion->answer_3 }}
                            </td>
                            <td>
                                {{ $testQuestion->answer_4 }}
                            </td>
                            <td>
                                {{ $testQuestion->answer_5 }}
                            </td>
                            <td>
                                {{ $testQuestion->correct_answer_label }}
                            </td>
                            <td>
                                @if($testQuestion->test)
                                    <span class="badge badge-relationship">{{ $testQuestion->test->name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('test_question_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.test-questions.show', $testQuestion) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('test_question_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.test-questions.edit', $testQuestion) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('test_question_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $testQuestion->id }})" wire:loading.attr="disabled">
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
            {{ $testQuestions->links() }}
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