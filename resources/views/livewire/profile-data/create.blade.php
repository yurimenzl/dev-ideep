<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('profileData.dominance') ? 'invalid' : '' }}">
        <label class="form-label required" for="dominance">{{ trans('cruds.profileData.fields.dominance') }}</label>
        <input class="form-control" type="number" name="dominance" id="dominance" required wire:model.defer="profileData.dominance" step="1">
        <div class="validation-message">
            {{ $errors->first('profileData.dominance') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.profileData.fields.dominance_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('profileData.influence') ? 'invalid' : '' }}">
        <label class="form-label required" for="influence">{{ trans('cruds.profileData.fields.influence') }}</label>
        <input class="form-control" type="number" name="influence" id="influence" required wire:model.defer="profileData.influence" step="1">
        <div class="validation-message">
            {{ $errors->first('profileData.influence') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.profileData.fields.influence_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('profileData.stability') ? 'invalid' : '' }}">
        <label class="form-label required" for="stability">{{ trans('cruds.profileData.fields.stability') }}</label>
        <input class="form-control" type="number" name="stability" id="stability" required wire:model.defer="profileData.stability" step="1">
        <div class="validation-message">
            {{ $errors->first('profileData.stability') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.profileData.fields.stability_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('profileData.conformity') ? 'invalid' : '' }}">
        <label class="form-label required" for="conformity">{{ trans('cruds.profileData.fields.conformity') }}</label>
        <input class="form-control" type="number" name="conformity" id="conformity" required wire:model.defer="profileData.conformity" step="1">
        <div class="validation-message">
            {{ $errors->first('profileData.conformity') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.profileData.fields.conformity_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('profileData.profile_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="profile">{{ trans('cruds.profileData.fields.profile') }}</label>
        <x-select-list class="form-control" required id="profile" name="profile" :options="$this->listsForFields['profile']" wire:model="profileData.profile_id" />
        <div class="validation-message">
            {{ $errors->first('profileData.profile_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.profileData.fields.profile_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.profile-datas.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>