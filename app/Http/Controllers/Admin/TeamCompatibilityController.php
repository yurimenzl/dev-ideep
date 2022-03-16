<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamCompatibility;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TeamCompatibilityController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('team_compatibility_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.team-compatibility.index');
    }

    public function create()
    {
        abort_if(Gate::denies('team_compatibility_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.team-compatibility.create');
    }

    public function edit(TeamCompatibility $teamCompatibility)
    {
        abort_if(Gate::denies('team_compatibility_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.team-compatibility.edit', compact('teamCompatibility'));
    }

    public function show(TeamCompatibility $teamCompatibility)
    {
        abort_if(Gate::denies('team_compatibility_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.team-compatibility.show', compact('teamCompatibility'));
    }
}
