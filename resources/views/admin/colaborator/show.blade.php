@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.colaborator.title_singular') }}:
                    {{ trans('cruds.colaborator.fields.id') }}
                    {{ $colaborator->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.colaborator.fields.id') }}
                            </th>
                            <td>
                                {{ $colaborator->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.colaborator.fields.name') }}
                            </th>
                            <td>
                                {{ $colaborator->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.colaborator.fields.gender') }}
                            </th>
                            <td>
                                {{ $colaborator->gender_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.colaborator.fields.email') }}
                            </th>
                            <td>
                                <a class="link-light-blue" href="mailto:{{ $colaborator->email }}">
                                    <i class="far fa-envelope fa-fw">
                                    </i>
                                    {{ $colaborator->email }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.colaborator.fields.work_company') }}
                            </th>
                            <td>
                                {{ $colaborator->work_company }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.colaborator.fields.phone') }}
                            </th>
                            <td>
                                {{ $colaborator->phone }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.colaborator.fields.position') }}
                            </th>
                            <td>
                                {{ $colaborator->position }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.colaborator.fields.company') }}
                            </th>
                            <td>
                                @if($colaborator->company)
                                    <span class="badge badge-relationship">{{ $colaborator->company->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.colaborator.fields.country') }}
                            </th>
                            <td>
                                @if($colaborator->country)
                                    <span class="badge badge-relationship">{{ $colaborator->country->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.colaborator.fields.city') }}
                            </th>
                            <td>
                                @if($colaborator->city)
                                    <span class="badge badge-relationship">{{ $colaborator->city->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.colaborator.fields.profile') }}
                            </th>
                            <td>
                                @if($colaborator->profile)
                                    <span class="badge badge-relationship">{{ $colaborator->profile->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('colaborator_edit')
                    <a href="{{ route('admin.colaborators.edit', $colaborator) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.colaborators.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection