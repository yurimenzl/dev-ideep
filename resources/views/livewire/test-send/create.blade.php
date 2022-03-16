<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('testSend.active') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.testSend.fields.active') }}</label>
        @foreach($this->listsForFields['active'] as $key => $value)
            <label class="radio-label"><input type="radio" name="active" wire:model="testSend.active" value="{{ $key }}">{{ $value }}</label>
        @endforeach
        <div class="validation-message">
            {{ $errors->first('testSend.active') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.testSend.fields.active_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('testSend.colaborator_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="colaborator">{{ trans('cruds.testSend.fields.colaborator') }}</label>
        <x-select-list class="form-control" required id="colaborator" name="colaborator" :options="$this->listsForFields['colaborator']" wire:model="testSend.colaborator_id" />
        <div class="validation-message">
            {{ $errors->first('testSend.colaborator_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.testSend.fields.colaborator_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('testSend.test_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="test">{{ trans('cruds.testSend.fields.test') }}</label>
        <x-select-list class="form-control" required id="test" name="test" :options="$this->listsForFields['test']" wire:model="testSend.test_id" />
        <div class="validation-message">
            {{ $errors->first('testSend.test_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.testSend.fields.test_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.test-sends.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>