<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FormController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('form_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.form.index');
    }

    public function create()
    {
        abort_if(Gate::denies('form_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.form.create');
    }

    public function edit(Form $form)
    {
        abort_if(Gate::denies('form_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.form.edit', compact('form'));
    }

    public function show(Form $form)
    {
        abort_if(Gate::denies('form_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.form.show', compact('form'));
    }
}
