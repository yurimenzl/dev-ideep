@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.company.title_singular') }}:
                    {{ trans('cruds.company.fields.id') }}
                    {{ $company->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.company.fields.id') }}
                            </th>
                            <td>
                                {{ $company->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.company.fields.name') }}
                            </th>
                            <td>
                                {{ $company->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.company.fields.email') }}
                            </th>
                            <td>
                                <a class="link-light-blue" href="mailto:{{ $company->email }}">
                                    <i class="far fa-envelope fa-fw">
                                    </i>
                                    {{ $company->email }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.company.fields.taxid') }}
                            </th>
                            <td>
                                {{ $company->taxid }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.company.fields.segment') }}
                            </th>
                            <td>
                                {{ $company->segment }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.company.fields.sector') }}
                            </th>
                            <td>
                                {{ $company->sector }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.company.fields.phone') }}
                            </th>
                            <td>
                                {{ $company->phone }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.company.fields.country') }}
                            </th>
                            <td>
                                @if($company->country)
                                    <span class="badge badge-relationship">{{ $company->country->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.company.fields.city') }}
                            </th>
                            <td>
                                @if($company->city)
                                    <span class="badge badge-relationship">{{ $company->city->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.company.fields.plan_type') }}
                            </th>
                            <td>
                                @if($company->planType)
                                    <span class="badge badge-relationship">{{ $company->planType->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('company_edit')
                    <a href="{{ route('admin.companies.edit', $company) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.companies.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection