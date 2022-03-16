<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('position.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.position.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="position.name">
        <div class="validation-message">
            {{ $errors->first('position.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.position.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('position.description') ? 'invalid' : '' }}">
        <label class="form-label required" for="description">{{ trans('cruds.position.fields.description') }}</label>
        <textarea class="form-control" name="description" id="description" required wire:model.defer="position.description" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('position.description') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.position.fields.description_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('position.dominance') ? 'invalid' : '' }}">
        <label class="form-label required" for="dominance">{{ trans('cruds.position.fields.dominance') }}</label>
        <input class="form-control" type="number" name="dominance" id="dominance" required wire:model.defer="position.dominance" step="1">
        <div class="validation-message">
            {{ $errors->first('position.dominance') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.position.fields.dominance_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('position.influence') ? 'invalid' : '' }}">
        <label class="form-label required" for="influence">{{ trans('cruds.position.fields.influence') }}</label>
        <input class="form-control" type="number" name="influence" id="influence" required wire:model.defer="position.influence" step="1">
        <div class="validation-message">
            {{ $errors->first('position.influence') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.position.fields.influence_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('position.stability') ? 'invalid' : '' }}">
        <label class="form-label required" for="stability">{{ trans('cruds.position.fields.stability') }}</label>
        <input class="form-control" type="number" name="stability" id="stability" required wire:model.defer="position.stability" step="1">
        <div class="validation-message">
            {{ $errors->first('position.stability') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.position.fields.stability_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('position.conformity') ? 'invalid' : '' }}">
        <label class="form-label required" for="conformity">{{ trans('cruds.position.fields.conformity') }}</label>
        <input class="form-control" type="number" name="conformity" id="conformity" required wire:model.defer="position.conformity" step="1">
        <div class="validation-message">
            {{ $errors->first('position.conformity') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.position.fields.conformity_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('position.company_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="company">{{ trans('cruds.position.fields.company') }}</label>
        <x-select-list class="form-control" required id="company" name="company" :options="$this->listsForFields['company']" wire:model="position.company_id" />
        <div class="validation-message">
            {{ $errors->first('position.company_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.position.fields.company_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.positions.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>