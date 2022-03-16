<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TestQuestion;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestQuestionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('test_question_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.test-question.index');
    }

    public function create()
    {
        abort_if(Gate::denies('test_question_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.test-question.create');
    }

    public function edit(TestQuestion $testQuestion)
    {
        abort_if(Gate::denies('test_question_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.test-question.edit', compact('testQuestion'));
    }

    public function show(TestQuestion $testQuestion)
    {
        abort_if(Gate::denies('test_question_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $testQuestion->load('test');

        return view('admin.test-question.show', compact('testQuestion'));
    }
}
