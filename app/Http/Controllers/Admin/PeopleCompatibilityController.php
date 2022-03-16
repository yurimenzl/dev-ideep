<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PeopleCompatibility;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PeopleCompatibilityController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('people_compatibility_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.people-compatibility.index');
    }

    public function create()
    {
        abort_if(Gate::denies('people_compatibility_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.people-compatibility.create');
    }

    public function edit(PeopleCompatibility $peopleCompatibility)
    {
        abort_if(Gate::denies('people_compatibility_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.people-compatibility.edit', compact('peopleCompatibility'));
    }

    public function show(PeopleCompatibility $peopleCompatibility)
    {
        abort_if(Gate::denies('people_compatibility_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.people-compatibility.show', compact('peopleCompatibility'));
    }
}
