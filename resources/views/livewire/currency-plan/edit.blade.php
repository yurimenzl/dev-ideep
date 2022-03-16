<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('currencyPlan.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.currencyPlan.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="currencyPlan.name">
        <div class="validation-message">
            {{ $errors->first('currencyPlan.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.currencyPlan.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('currencyPlan.currency') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.currencyPlan.fields.currency') }}</label>
        <select class="form-control" wire:model="currencyPlan.currency">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['currency'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('currencyPlan.currency') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.currencyPlan.fields.currency_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('currencyPlan.type') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.currencyPlan.fields.type') }}</label>
        <select class="form-control" wire:model="currencyPlan.type">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['type'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('currencyPlan.type') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.currencyPlan.fields.type_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.currency-plans.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>