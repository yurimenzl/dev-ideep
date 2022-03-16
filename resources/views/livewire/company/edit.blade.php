<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('company.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.company.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="company.name">
        <div class="validation-message">
            {{ $errors->first('company.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.company.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('company.email') ? 'invalid' : '' }}">
        <label class="form-label required" for="email">{{ trans('cruds.company.fields.email') }}</label>
        <input class="form-control" type="email" name="email" id="email" required wire:model.defer="company.email">
        <div class="validation-message">
            {{ $errors->first('company.email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.company.fields.email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('company.taxid') ? 'invalid' : '' }}">
        <label class="form-label required" for="taxid">{{ trans('cruds.company.fields.taxid') }}</label>
        <input class="form-control" type="text" name="taxid" id="taxid" required wire:model.defer="company.taxid">
        <div class="validation-message">
            {{ $errors->first('company.taxid') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.company.fields.taxid_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('company.segment') ? 'invalid' : '' }}">
        <label class="form-label" for="segment">{{ trans('cruds.company.fields.segment') }}</label>
        <input class="form-control" type="text" name="segment" id="segment" wire:model.defer="company.segment">
        <div class="validation-message">
            {{ $errors->first('company.segment') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.company.fields.segment_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('company.sector') ? 'invalid' : '' }}">
        <label class="form-label" for="sector">{{ trans('cruds.company.fields.sector') }}</label>
        <input class="form-control" type="text" name="sector" id="sector" wire:model.defer="company.sector">
        <div class="validation-message">
            {{ $errors->first('company.sector') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.company.fields.sector_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('company.phone') ? 'invalid' : '' }}">
        <label class="form-label" for="phone">{{ trans('cruds.company.fields.phone') }}</label>
        <input class="form-control" type="text" name="phone" id="phone" wire:model.defer="company.phone">
        <div class="validation-message">
            {{ $errors->first('company.phone') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.company.fields.phone_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('company.country_id') ? 'invalid' : '' }}">
        <label class="form-label" for="country">{{ trans('cruds.company.fields.country') }}</label>
        <x-select-list class="form-control" id="country" name="country" :options="$this->listsForFields['country']" wire:model="company.country_id" />
        <div class="validation-message">
            {{ $errors->first('company.country_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.company.fields.country_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('company.city_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="city">{{ trans('cruds.company.fields.city') }}</label>
        <x-select-list class="form-control" required id="city" name="city" :options="$this->listsForFields['city']" wire:model="company.city_id" />
        <div class="validation-message">
            {{ $errors->first('company.city_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.company.fields.city_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('company.plan_type_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="plan_type">{{ trans('cruds.company.fields.plan_type') }}</label>
        <x-select-list class="form-control" required id="plan_type" name="plan_type" :options="$this->listsForFields['plan_type']" wire:model="company.plan_type_id" />
        <div class="validation-message">
            {{ $errors->first('company.plan_type_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.company.fields.plan_type_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.companies.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>