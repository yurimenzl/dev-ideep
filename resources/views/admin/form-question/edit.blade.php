@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.formQuestion.title_singular') }}:
                    {{ trans('cruds.formQuestion.fields.id') }}
                    {{ $formQuestion->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('form-question.edit', [$formQuestion])
        </div>
    </div>
</div>
@endsection