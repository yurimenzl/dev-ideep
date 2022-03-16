<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PositionCompatibility;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PositionCompatibilityController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('position_compatibility_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.position-compatibility.index');
    }

    public function create()
    {
        abort_if(Gate::denies('position_compatibility_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.position-compatibility.create');
    }

    public function edit(PositionCompatibility $positionCompatibility)
    {
        abort_if(Gate::denies('position_compatibility_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.position-compatibility.edit', compact('positionCompatibility'));
    }

    public function show(PositionCompatibility $positionCompatibility)
    {
        abort_if(Gate::denies('position_compatibility_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.position-compatibility.show', compact('positionCompatibility'));
    }
}
