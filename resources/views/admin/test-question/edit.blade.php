@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.testQuestion.title_singular') }}:
                    {{ trans('cruds.testQuestion.fields.id') }}
                    {{ $testQuestion->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('test-question.edit', [$testQuestion])
        </div>
    </div>
</div>
@endsection