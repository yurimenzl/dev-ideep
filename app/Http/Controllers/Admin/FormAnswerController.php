<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormAnswer;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FormAnswerController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('form_answer_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.form-answer.index');
    }

    public function create()
    {
        abort_if(Gate::denies('form_answer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.form-answer.create');
    }

    public function edit(FormAnswer $formAnswer)
    {
        abort_if(Gate::denies('form_answer_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.form-answer.edit', compact('formAnswer'));
    }

    public function show(FormAnswer $formAnswer)
    {
        abort_if(Gate::denies('form_answer_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $formAnswer->load('colaborator');

        return view('admin.form-answer.show', compact('formAnswer'));
    }
}
