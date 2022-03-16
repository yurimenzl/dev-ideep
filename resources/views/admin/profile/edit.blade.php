@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.profile.title_singular') }}:
                    {{ trans('cruds.profile.fields.id') }}
                    {{ $profile->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('profile.edit', [$profile])
        </div>
    </div>
</div>
@endsection