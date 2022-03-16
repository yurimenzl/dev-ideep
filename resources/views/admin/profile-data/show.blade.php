@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.profileData.title_singular') }}:
                    {{ trans('cruds.profileData.fields.id') }}
                    {{ $profileData->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.profileData.fields.id') }}
                            </th>
                            <td>
                                {{ $profileData->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.profileData.fields.dominance') }}
                            </th>
                            <td>
                                {{ $profileData->dominance }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.profileData.fields.influence') }}
                            </th>
                            <td>
                                {{ $profileData->influence }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.profileData.fields.stability') }}
                            </th>
                            <td>
                                {{ $profileData->stability }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.profileData.fields.conformity') }}
                            </th>
                            <td>
                                {{ $profileData->conformity }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.profileData.fields.profile') }}
                            </th>
                            <td>
                                @if($profileData->profile)
                                    <span class="badge badge-relationship">{{ $profileData->profile->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('profile_data_edit')
                    <a href="{{ route('admin.profile-datas.edit', $profileData) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.profile-datas.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection