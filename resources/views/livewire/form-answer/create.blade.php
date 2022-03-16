<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('formAnswer.question_number') ? 'invalid' : '' }}">
        <label class="form-label required" for="question_number">{{ trans('cruds.formAnswer.fields.question_number') }}</label>
        <input class="form-control" type="number" name="question_number" id="question_number" required wire:model.defer="formAnswer.question_number" step="1">
        <div class="validation-message">
            {{ $errors->first('formAnswer.question_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.formAnswer.fields.question_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('formAnswer.question_plus') ? 'invalid' : '' }}">
        <label class="form-label required" for="question_plus">{{ trans('cruds.formAnswer.fields.question_plus') }}</label>
        <input class="form-control" type="text" name="question_plus" id="question_plus" required wire:model.defer="formAnswer.question_plus">
        <div class="validation-message">
            {{ $errors->first('formAnswer.question_plus') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.formAnswer.fields.question_plus_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('formAnswer.question_minus') ? 'invalid' : '' }}">
        <label class="form-label required" for="question_minus">{{ trans('cruds.formAnswer.fields.question_minus') }}</label>
        <input class="form-control" type="text" name="question_minus" id="question_minus" required wire:model.defer="formAnswer.question_minus">
        <div class="validation-message">
            {{ $errors->first('formAnswer.question_minus') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.formAnswer.fields.question_minus_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('formAnswer.colaborator_id') ? 'invalid' : '' }}">
        <label class="form-label" for="colaborator">{{ trans('cruds.formAnswer.fields.colaborator') }}</label>
        <x-select-list class="form-control" id="colaborator" name="colaborator" :options="$this->listsForFields['colaborator']" wire:model="formAnswer.colaborator_id" />
        <div class="validation-message">
            {{ $errors->first('formAnswer.colaborator_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.formAnswer.fields.colaborator_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.form-answers.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>