<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('testQuestion.question_number') ? 'invalid' : '' }}">
        <label class="form-label required" for="question_number">{{ trans('cruds.testQuestion.fields.question_number') }}</label>
        <input class="form-control" type="number" name="question_number" id="question_number" required wire:model.defer="testQuestion.question_number" step="1">
        <div class="validation-message">
            {{ $errors->first('testQuestion.question_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.testQuestion.fields.question_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('testQuestion.title') ? 'invalid' : '' }}">
        <label class="form-label required" for="title">{{ trans('cruds.testQuestion.fields.title') }}</label>
        <textarea class="form-control" name="title" id="title" required wire:model.defer="testQuestion.title" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('testQuestion.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.testQuestion.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('testQuestion.answer_1') ? 'invalid' : '' }}">
        <label class="form-label required" for="answer_1">{{ trans('cruds.testQuestion.fields.answer_1') }}</label>
        <input class="form-control" type="text" name="answer_1" id="answer_1" required wire:model.defer="testQuestion.answer_1">
        <div class="validation-message">
            {{ $errors->first('testQuestion.answer_1') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.testQuestion.fields.answer_1_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('testQuestion.answer_2') ? 'invalid' : '' }}">
        <label class="form-label required" for="answer_2">{{ trans('cruds.testQuestion.fields.answer_2') }}</label>
        <input class="form-control" type="text" name="answer_2" id="answer_2" required wire:model.defer="testQuestion.answer_2">
        <div class="validation-message">
            {{ $errors->first('testQuestion.answer_2') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.testQuestion.fields.answer_2_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('testQuestion.answer_3') ? 'invalid' : '' }}">
        <label class="form-label" for="answer_3">{{ trans('cruds.testQuestion.fields.answer_3') }}</label>
        <input class="form-control" type="text" name="answer_3" id="answer_3" wire:model.defer="testQuestion.answer_3">
        <div class="validation-message">
            {{ $errors->first('testQuestion.answer_3') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.testQuestion.fields.answer_3_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('testQuestion.answer_4') ? 'invalid' : '' }}">
        <label class="form-label" for="answer_4">{{ trans('cruds.testQuestion.fields.answer_4') }}</label>
        <input class="form-control" type="text" name="answer_4" id="answer_4" wire:model.defer="testQuestion.answer_4">
        <div class="validation-message">
            {{ $errors->first('testQuestion.answer_4') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.testQuestion.fields.answer_4_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('testQuestion.answer_5') ? 'invalid' : '' }}">
        <label class="form-label" for="answer_5">{{ trans('cruds.testQuestion.fields.answer_5') }}</label>
        <input class="form-control" type="text" name="answer_5" id="answer_5" wire:model.defer="testQuestion.answer_5">
        <div class="validation-message">
            {{ $errors->first('testQuestion.answer_5') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.testQuestion.fields.answer_5_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('testQuestion.correct_answer') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.testQuestion.fields.correct_answer') }}</label>
        <select class="form-control" wire:model="testQuestion.correct_answer">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['correct_answer'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('testQuestion.correct_answer') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.testQuestion.fields.correct_answer_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('testQuestion.test_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="test">{{ trans('cruds.testQuestion.fields.test') }}</label>
        <x-select-list class="form-control" required id="test" name="test" :options="$this->listsForFields['test']" wire:model="testQuestion.test_id" />
        <div class="validation-message">
            {{ $errors->first('testQuestion.test_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.testQuestion.fields.test_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.test-questions.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>