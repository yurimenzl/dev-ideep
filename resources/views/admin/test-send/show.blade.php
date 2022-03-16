@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.testSend.title_singular') }}:
                    {{ trans('cruds.testSend.fields.id') }}
                    {{ $testSend->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.testSend.fields.id') }}
                            </th>
                            <td>
                                {{ $testSend->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.testSend.fields.active') }}
                            </th>
                            <td>
                                {{ $testSend->active_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.testSend.fields.colaborator') }}
                            </th>
                            <td>
                                @if($testSend->colaborator)
                                    <span class="badge badge-relationship">{{ $testSend->colaborator->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.testSend.fields.test') }}
                            </th>
                            <td>
                                @if($testSend->test)
                                    <span class="badge badge-relationship">{{ $testSend->test->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('test_send_edit')
                    <a href="{{ route('admin.test-sends.edit', $testSend) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.test-sends.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection