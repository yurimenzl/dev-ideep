@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.currencyPlan.title_singular') }}:
                    {{ trans('cruds.currencyPlan.fields.id') }}
                    {{ $currencyPlan->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.currencyPlan.fields.id') }}
                            </th>
                            <td>
                                {{ $currencyPlan->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.currencyPlan.fields.name') }}
                            </th>
                            <td>
                                {{ $currencyPlan->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.currencyPlan.fields.currency') }}
                            </th>
                            <td>
                                {{ $currencyPlan->currency_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.currencyPlan.fields.type') }}
                            </th>
                            <td>
                                {{ $currencyPlan->type_label }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('currency_plan_edit')
                    <a href="{{ route('admin.currency-plans.edit', $currencyPlan) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.currency-plans.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection