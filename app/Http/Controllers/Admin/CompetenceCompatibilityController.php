<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompetenceCompatibility;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CompetenceCompatibilityController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('competence_compatibility_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.competence-compatibility.index');
    }

    public function create()
    {
        abort_if(Gate::denies('competence_compatibility_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.competence-compatibility.create');
    }

    public function edit(CompetenceCompatibility $competenceCompatibility)
    {
        abort_if(Gate::denies('competence_compatibility_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.competence-compatibility.edit', compact('competenceCompatibility'));
    }

    public function show(CompetenceCompatibility $competenceCompatibility)
    {
        abort_if(Gate::denies('competence_compatibility_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.competence-compatibility.show', compact('competenceCompatibility'));
    }
}
