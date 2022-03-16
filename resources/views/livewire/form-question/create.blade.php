<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('formQuestion.number') ? 'invalid' : '' }}">
        <label class="form-label required" for="number">{{ trans('cruds.formQuestion.fields.number') }}</label>
        <input class="form-control" type="number" name="number" id="number" required wire:model.defer="formQuestion.number" step="1">
        <div class="validation-message">
            {{ $errors->first('formQuestion.number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.formQuestion.fields.number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('formQuestion.characteristic') ? 'invalid' : '' }}">
        <label class="form-label required" for="characteristic">{{ trans('cruds.formQuestion.fields.characteristic') }}</label>
        <input class="form-control" type="text" name="characteristic" id="characteristic" required wire:model.defer="formQuestion.characteristic">
        <div class="validation-message">
            {{ $errors->first('formQuestion.characteristic') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.formQuestion.fields.characteristic_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('formQuestion.value') ? 'invalid' : '' }}">
        <label class="form-label required" for="value">{{ trans('cruds.formQuestion.fields.value') }}</label>
        <input class="form-control" type="text" name="value" id="value" required wire:model.defer="formQuestion.value">
        <div class="validation-message">
            {{ $errors->first('formQuestion.value') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.formQuestion.fields.value_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.form-questions.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>