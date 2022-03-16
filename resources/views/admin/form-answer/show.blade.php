@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.formAnswer.title_singular') }}:
                    {{ trans('cruds.formAnswer.fields.id') }}
                    {{ $formAnswer->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.formAnswer.fields.id') }}
                            </th>
                            <td>
                                {{ $formAnswer->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.formAnswer.fields.question_number') }}
                            </th>
                            <td>
                                {{ $formAnswer->question_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.formAnswer.fields.question_plus') }}
                            </th>
                            <td>
                                {{ $formAnswer->question_plus }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.formAnswer.fields.question_minus') }}
                            </th>
                            <td>
                                {{ $formAnswer->question_minus }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.formAnswer.fields.colaborator') }}
                            </th>
                            <td>
                                @if($formAnswer->colaborator)
                                    <span class="badge badge-relationship">{{ $formAnswer->colaborator->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('form_answer_edit')
                    <a href="{{ route('admin.form-answers.edit', $formAnswer) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.form-answers.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection