@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.profile.title_singular') }}:
                    {{ trans('cruds.profile.fields.id') }}
                    {{ $profile->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.profile.fields.id') }}
                            </th>
                            <td>
                                {{ $profile->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.profile.fields.name') }}
                            </th>
                            <td>
                                {{ $profile->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.profile.fields.description') }}
                            </th>
                            <td>
                                {{ $profile->description }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.profile.fields.summary') }}
                            </th>
                            <td>
                                {{ $profile->summary }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.profile.fields.sales') }}
                            </th>
                            <td>
                                {{ $profile->sales }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.profile.fields.leadership') }}
                            </th>
                            <td>
                                {{ $profile->leadership }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('profile_edit')
                    <a href="{{ route('admin.profiles.edit', $profile) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.profiles.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection