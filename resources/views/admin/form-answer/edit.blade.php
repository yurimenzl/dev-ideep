@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.formAnswer.title_singular') }}:
                    {{ trans('cruds.formAnswer.fields.id') }}
                    {{ $formAnswer->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('form-answer.edit', [$formAnswer])
        </div>
    </div>
</div>
@endsection