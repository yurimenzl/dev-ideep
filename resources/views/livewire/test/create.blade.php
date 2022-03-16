<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('test.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.test.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="test.name">
        <div class="validation-message">
            {{ $errors->first('test.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.test.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('test.type') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.test.fields.type') }}</label>
        <select class="form-control" wire:model="test.type">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['type'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('test.type') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.test.fields.type_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('test.time') ? 'invalid' : '' }}">
        <label class="form-label required" for="time">{{ trans('cruds.test.fields.time') }}</label>
        <input class="form-control" type="number" name="time" id="time" required wire:model.defer="test.time" step="1">
        <div class="validation-message">
            {{ $errors->first('test.time') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.test.fields.time_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('test.weight') ? 'invalid' : '' }}">
        <label class="form-label required" for="weight">{{ trans('cruds.test.fields.weight') }}</label>
        <input class="form-control" type="number" name="weight" id="weight" required wire:model.defer="test.weight" step="0.01">
        <div class="validation-message">
            {{ $errors->first('test.weight') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.test.fields.weight_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('test.number_questions') ? 'invalid' : '' }}">
        <label class="form-label required" for="number_questions">{{ trans('cruds.test.fields.number_questions') }}</label>
        <input class="form-control" type="number" name="number_questions" id="number_questions" required wire:model.defer="test.number_questions" step="1">
        <div class="validation-message">
            {{ $errors->first('test.number_questions') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.test.fields.number_questions_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('test.company_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="company">{{ trans('cruds.test.fields.company') }}</label>
        <x-select-list class="form-control" required id="company" name="company" :options="$this->listsForFields['company']" wire:model="test.company_id" />
        <div class="validation-message">
            {{ $errors->first('test.company_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.test.fields.company_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.tests.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>