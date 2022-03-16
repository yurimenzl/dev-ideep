<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('profile.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.profile.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="profile.name">
        <div class="validation-message">
            {{ $errors->first('profile.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.profile.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('profile.description') ? 'invalid' : '' }}">
        <label class="form-label required" for="description">{{ trans('cruds.profile.fields.description') }}</label>
        <textarea class="form-control" name="description" id="description" required wire:model.defer="profile.description" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('profile.description') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.profile.fields.description_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('profile.summary') ? 'invalid' : '' }}">
        <label class="form-label" for="summary">{{ trans('cruds.profile.fields.summary') }}</label>
        <textarea class="form-control" name="summary" id="summary" wire:model.defer="profile.summary" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('profile.summary') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.profile.fields.summary_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('profile.sales') ? 'invalid' : '' }}">
        <label class="form-label" for="sales">{{ trans('cruds.profile.fields.sales') }}</label>
        <textarea class="form-control" name="sales" id="sales" wire:model.defer="profile.sales" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('profile.sales') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.profile.fields.sales_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('profile.leadership') ? 'invalid' : '' }}">
        <label class="form-label required" for="leadership">{{ trans('cruds.profile.fields.leadership') }}</label>
        <input class="form-control" type="text" name="leadership" id="leadership" required wire:model.defer="profile.leadership">
        <div class="validation-message">
            {{ $errors->first('profile.leadership') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.profile.fields.leadership_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.profiles.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>