<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('city.name') ? 'invalid' : '' }}">
        <label class="form-label" for="name">{{ trans('cruds.city.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" wire:model.defer="city.name">
        <div class="validation-message">
            {{ $errors->first('city.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.city.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('city.state') ? 'invalid' : '' }}">
        <label class="form-label" for="state">{{ trans('cruds.city.fields.state') }}</label>
        <input class="form-control" type="text" name="state" id="state" wire:model.defer="city.state">
        <div class="validation-message">
            {{ $errors->first('city.state') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.city.fields.state_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.cities.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>