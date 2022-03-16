@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.formQuestion.title_singular') }}:
                    {{ trans('cruds.formQuestion.fields.id') }}
                    {{ $formQuestion->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.formQuestion.fields.id') }}
                            </th>
                            <td>
                                {{ $formQuestion->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.formQuestion.fields.number') }}
                            </th>
                            <td>
                                {{ $formQuestion->number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.formQuestion.fields.characteristic') }}
                            </th>
                            <td>
                                {{ $formQuestion->characteristic }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.formQuestion.fields.value') }}
                            </th>
                            <td>
                                {{ $formQuestion->value }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('form_question_edit')
                    <a href="{{ route('admin.form-questions.edit', $formQuestion) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.form-questions.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection