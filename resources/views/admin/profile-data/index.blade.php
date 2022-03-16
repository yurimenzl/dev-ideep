@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.profileData.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('profile_data_create')
                    <a class="btn btn-indigo" href="{{ route('admin.profile-datas.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.profileData.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('profile-data.index')

    </div>
</div>
@endsection