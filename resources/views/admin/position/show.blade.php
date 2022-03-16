@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.position.title_singular') }}:
                    {{ trans('cruds.position.fields.id') }}
                    {{ $position->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.position.fields.id') }}
                            </th>
                            <td>
                                {{ $position->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.position.fields.name') }}
                            </th>
                            <td>
                                {{ $position->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.position.fields.description') }}
                            </th>
                            <td>
                                {{ $position->description }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.position.fields.dominance') }}
                            </th>
                            <td>
                                {{ $position->dominance }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.position.fields.influence') }}
                            </th>
                            <td>
                                {{ $position->influence }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.position.fields.stability') }}
                            </th>
                            <td>
                                {{ $position->stability }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.position.fields.conformity') }}
                            </th>
                            <td>
                                {{ $position->conformity }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.position.fields.company') }}
                            </th>
                            <td>
                                @if($position->company)
                                    <span class="badge badge-relationship">{{ $position->company->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('position_edit')
                    <a href="{{ route('admin.positions.edit', $position) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.positions.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection