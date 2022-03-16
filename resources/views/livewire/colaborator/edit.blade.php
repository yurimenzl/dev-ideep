<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('colaborator.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.colaborator.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="colaborator.name">
        <div class="validation-message">
            {{ $errors->first('colaborator.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.colaborator.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('colaborator.gender') ? 'invalid' : '' }}">
        <label class="form-label required">{{ trans('cruds.colaborator.fields.gender') }}</label>
        <select class="form-control" wire:model="colaborator.gender">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['gender'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('colaborator.gender') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.colaborator.fields.gender_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('colaborator.email') ? 'invalid' : '' }}">
        <label class="form-label required" for="email">{{ trans('cruds.colaborator.fields.email') }}</label>
        <input class="form-control" type="email" name="email" id="email" required wire:model.defer="colaborator.email">
        <div class="validation-message">
            {{ $errors->first('colaborator.email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.colaborator.fields.email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('colaborator.work_company') ? 'invalid' : '' }}">
        <label class="form-label" for="work_company">{{ trans('cruds.colaborator.fields.work_company') }}</label>
        <input class="form-control" type="text" name="work_company" id="work_company" wire:model.defer="colaborator.work_company">
        <div class="validation-message">
            {{ $errors->first('colaborator.work_company') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.colaborator.fields.work_company_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('colaborator.phone') ? 'invalid' : '' }}">
        <label class="form-label" for="phone">{{ trans('cruds.colaborator.fields.phone') }}</label>
        <input class="form-control" type="text" name="phone" id="phone" wire:model.defer="colaborator.phone">
        <div class="validation-message">
            {{ $errors->first('colaborator.phone') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.colaborator.fields.phone_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('colaborator.position') ? 'invalid' : '' }}">
        <label class="form-label" for="position">{{ trans('cruds.colaborator.fields.position') }}</label>
        <input class="form-control" type="text" name="position" id="position" wire:model.defer="colaborator.position">
        <div class="validation-message">
            {{ $errors->first('colaborator.position') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.colaborator.fields.position_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('colaborator.company_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="company">{{ trans('cruds.colaborator.fields.company') }}</label>
        <x-select-list class="form-control" required id="company" name="company" :options="$this->listsForFields['company']" wire:model="colaborator.company_id" />
        <div class="validation-message">
            {{ $errors->first('colaborator.company_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.colaborator.fields.company_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('colaborator.country_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="country">{{ trans('cruds.colaborator.fields.country') }}</label>
        <x-select-list class="form-control" required id="country" name="country" :options="$this->listsForFields['country']" wire:model="colaborator.country_id" />
        <div class="validation-message">
            {{ $errors->first('colaborator.country_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.colaborator.fields.country_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('colaborator.city_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="city">{{ trans('cruds.colaborator.fields.city') }}</label>
        <x-select-list class="form-control" required id="city" name="city" :options="$this->listsForFields['city']" wire:model="colaborator.city_id" />
        <div class="validation-message">
            {{ $errors->first('colaborator.city_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.colaborator.fields.city_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('colaborator.profile_id') ? 'invalid' : '' }}">
        <label class="form-label" for="profile">{{ trans('cruds.colaborator.fields.profile') }}</label>
        <x-select-list class="form-control" id="profile" name="profile" :options="$this->listsForFields['profile']" wire:model="colaborator.profile_id" />
        <div class="validation-message">
            {{ $errors->first('colaborator.profile_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.colaborator.fields.profile_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.colaborators.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>