<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RankingCompatibility;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RankingCompatibilityController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('ranking_compatibility_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ranking-compatibility.index');
    }

    public function create()
    {
        abort_if(Gate::denies('ranking_compatibility_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ranking-compatibility.create');
    }

    public function edit(RankingCompatibility $rankingCompatibility)
    {
        abort_if(Gate::denies('ranking_compatibility_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ranking-compatibility.edit', compact('rankingCompatibility'));
    }

    public function show(RankingCompatibility $rankingCompatibility)
    {
        abort_if(Gate::denies('ranking_compatibility_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.ranking-compatibility.show', compact('rankingCompatibility'));
    }
}
