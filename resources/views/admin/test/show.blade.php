@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.test.title_singular') }}:
                    {{ trans('cruds.test.fields.id') }}
                    {{ $test->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.test.fields.id') }}
                            </th>
                            <td>
                                {{ $test->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.test.fields.name') }}
                            </th>
                            <td>
                                {{ $test->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.test.fields.type') }}
                            </th>
                            <td>
                                {{ $test->type_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.test.fields.time') }}
                            </th>
                            <td>
                                {{ $test->time }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.test.fields.weight') }}
                            </th>
                            <td>
                                {{ $test->weight }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.test.fields.number_questions') }}
                            </th>
                            <td>
                                {{ $test->number_questions }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.test.fields.company') }}
                            </th>
                            <td>
                                @if($test->company)
                                    <span class="badge badge-relationship">{{ $test->company->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('test_edit')
                    <a href="{{ route('admin.tests.edit', $test) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.tests.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection