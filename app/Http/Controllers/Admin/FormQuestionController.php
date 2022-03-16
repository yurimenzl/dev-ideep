<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormQuestion;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FormQuestionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('form_question_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.form-question.index');
    }

    public function create()
    {
        abort_if(Gate::denies('form_question_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.form-question.create');
    }

    public function edit(FormQuestion $formQuestion)
    {
        abort_if(Gate::denies('form_question_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.form-question.edit', compact('formQuestion'));
    }

    public function show(FormQuestion $formQuestion)
    {
        abort_if(Gate::denies('form_question_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.form-question.show', compact('formQuestion'));
    }
}
