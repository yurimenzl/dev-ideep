@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.testQuestion.title_singular') }}:
                    {{ trans('cruds.testQuestion.fields.id') }}
                    {{ $testQuestion->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.testQuestion.fields.id') }}
                            </th>
                            <td>
                                {{ $testQuestion->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.testQuestion.fields.question_number') }}
                            </th>
                            <td>
                                {{ $testQuestion->question_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.testQuestion.fields.title') }}
                            </th>
                            <td>
                                {{ $testQuestion->title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.testQuestion.fields.answer_1') }}
                            </th>
                            <td>
                                {{ $testQuestion->answer_1 }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.testQuestion.fields.answer_2') }}
                            </th>
                            <td>
                                {{ $testQuestion->answer_2 }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.testQuestion.fields.answer_3') }}
                            </th>
                            <td>
                                {{ $testQuestion->answer_3 }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.testQuestion.fields.answer_4') }}
                            </th>
                            <td>
                                {{ $testQuestion->answer_4 }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.testQuestion.fields.answer_5') }}
                            </th>
                            <td>
                                {{ $testQuestion->answer_5 }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.testQuestion.fields.correct_answer') }}
                            </th>
                            <td>
                                {{ $testQuestion->correct_answer_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.testQuestion.fields.test') }}
                            </th>
                            <td>
                                @if($testQuestion->test)
                                    <span class="badge badge-relationship">{{ $testQuestion->test->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('test_question_edit')
                    <a href="{{ route('admin.test-questions.edit', $testQuestion) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.test-questions.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection