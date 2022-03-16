<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Colaborator;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ColaboratorController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('colaborator_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.colaborator.index');
    }

    public function create()
    {
        abort_if(Gate::denies('colaborator_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.colaborator.create');
    }

    public function edit(Colaborator $colaborator)
    {
        abort_if(Gate::denies('colaborator_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.colaborator.edit', compact('colaborator'));
    }

    public function show(Colaborator $colaborator)
    {
        abort_if(Gate::denies('colaborator_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $colaborator->load('company', 'formQuestions', 'country', 'city', 'profile');

        return view('admin.colaborator.show', compact('colaborator'));
    }
}
