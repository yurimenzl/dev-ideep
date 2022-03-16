<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfileData;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileDataController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('profile_data_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.profile-data.index');
    }

    public function create()
    {
        abort_if(Gate::denies('profile_data_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.profile-data.create');
    }

    public function edit(ProfileData $profileData)
    {
        abort_if(Gate::denies('profile_data_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.profile-data.edit', compact('profileData'));
    }

    public function show(ProfileData $profileData)
    {
        abort_if(Gate::denies('profile_data_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $profileData->load('profile');

        return view('admin.profile-data.show', compact('profileData'));
    }
}
