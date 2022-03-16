<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i>
        </button>
        <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('admin.home') }}">
            {{ trans('panel.site_title') }}
        </a>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-300">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-left md:pb-2 text-blueGray-700 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0" href="{{ route('admin.home') }}">
                            {{ trans('panel.site_title') }}
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>



            <!-- Divider -->
            <div class="flex md:hidden">
                @if(file_exists(app_path('Http/Livewire/LanguageSwitcher.php')))
                    <livewire:language-switcher />
                @endif
            </div>
            <hr class="mb-6 md:min-w-full" />
            <!-- Heading -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a href="{{ route("admin.home") }}" class="{{ request()->is("admin") ? "sidebar-nav-active" : "sidebar-nav" }}">
                        <i class="fas fa-tv"></i>
                        {{ trans('global.dashboard') }}
                    </a>
                </li>

                @can('company_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/colaborators*")||request()->is("admin/positions*")||request()->is("admin/test-sends*")||request()->is("admin/test-questions*")||request()->is("admin/tests*")||request()->is("admin/test-results*")||request()->is("admin/forms*")||request()->is("admin/team-compatibilities*")||request()->is("admin/position-compatibilities*")||request()->is("admin/people-compatibilities*")||request()->is("admin/ranking-compatibilities*")||request()->is("admin/competence-compatibilities*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-user-tie">
                            </i>
                            {{ trans('cruds.companyManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('colaborator_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/colaborators*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.colaborators.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.colaborator.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('position_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/positions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.positions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.position.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('prova_access')
                                <li class="items-center">
                                    <a class="has-sub {{ request()->is("admin/test-sends*")||request()->is("admin/test-questions*")||request()->is("admin/tests*")||request()->is("admin/test-results*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                                        <i class="fa-fw fas c-sidebar-nav-icon fa-cogs">
                                        </i>
                                        {{ trans('cruds.prova.title') }}
                                    </a>
                                    <ul class="ml-4 subnav hidden">
                                        @can('test_send_access')
                                            <li class="items-center">
                                                <a class="{{ request()->is("admin/test-sends*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.test-sends.index") }}">
                                                    <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                                    </i>
                                                    {{ trans('cruds.testSend.title') }}
                                                </a>
                                            </li>
                                        @endcan
                                        @can('test_question_access')
                                            <li class="items-center">
                                                <a class="{{ request()->is("admin/test-questions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.test-questions.index") }}">
                                                    <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                                    </i>
                                                    {{ trans('cruds.testQuestion.title') }}
                                                </a>
                                            </li>
                                        @endcan
                                        @can('test_access')
                                            <li class="items-center">
                                                <a class="{{ request()->is("admin/tests*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.tests.index") }}">
                                                    <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                                    </i>
                                                    {{ trans('cruds.test.title') }}
                                                </a>
                                            </li>
                                        @endcan
                                        @can('test_result_access')
                                            <li class="items-center">
                                                <a class="{{ request()->is("admin/test-results*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.test-results.index") }}">
                                                    <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                                    </i>
                                                    {{ trans('cruds.testResult.title') }}
                                                </a>
                                            </li>
                                        @endcan
                                    </ul>
                                </li>
                            @endcan
                            @can('form_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/forms*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.forms.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.form.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('team_compatibility_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/team-compatibilities*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.team-compatibilities.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.teamCompatibility.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('compatibility_access')
                                <li class="items-center">
                                    <a class="has-sub {{ request()->is("admin/position-compatibilities*")||request()->is("admin/people-compatibilities*")||request()->is("admin/ranking-compatibilities*")||request()->is("admin/competence-compatibilities*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                                        <i class="fa-fw fas c-sidebar-nav-icon fa-cogs">
                                        </i>
                                        {{ trans('cruds.compatibility.title') }}
                                    </a>
                                    <ul class="ml-4 subnav hidden">
                                        @can('position_compatibility_access')
                                            <li class="items-center">
                                                <a class="{{ request()->is("admin/position-compatibilities*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.position-compatibilities.index") }}">
                                                    <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                                    </i>
                                                    {{ trans('cruds.positionCompatibility.title') }}
                                                </a>
                                            </li>
                                        @endcan
                                        @can('people_compatibility_access')
                                            <li class="items-center">
                                                <a class="{{ request()->is("admin/people-compatibilities*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.people-compatibilities.index") }}">
                                                    <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                                    </i>
                                                    {{ trans('cruds.peopleCompatibility.title') }}
                                                </a>
                                            </li>
                                        @endcan
                                        @can('ranking_compatibility_access')
                                            <li class="items-center">
                                                <a class="{{ request()->is("admin/ranking-compatibilities*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.ranking-compatibilities.index") }}">
                                                    <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                                    </i>
                                                    {{ trans('cruds.rankingCompatibility.title') }}
                                                </a>
                                            </li>
                                        @endcan
                                        @can('competence_compatibility_access')
                                            <li class="items-center">
                                                <a class="{{ request()->is("admin/competence-compatibilities*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.competence-compatibilities.index") }}">
                                                    <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                                    </i>
                                                    {{ trans('cruds.competenceCompatibility.title') }}
                                                </a>
                                            </li>
                                        @endcan
                                    </ul>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('user_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/permissions*")||request()->is("admin/roles*")||request()->is("admin/users*")||request()->is("admin/companies*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-users">
                            </i>
                            {{ trans('cruds.userManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('permission_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/permissions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.permissions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-unlock-alt">
                                        </i>
                                        {{ trans('cruds.permission.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/roles*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.roles.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-briefcase">
                                        </i>
                                        {{ trans('cruds.role.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/users*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.users.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-user">
                                        </i>
                                        {{ trans('cruds.user.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('company_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/companies*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.companies.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.company.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('selection_management_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/form-answers*")||request()->is("admin/form-questions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-award">
                            </i>
                            {{ trans('cruds.selectionManagement.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('form_answer_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/form-answers*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.form-answers.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.formAnswer.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('form_question_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/form-questions*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.form-questions.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.formQuestion.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('suporte_access')
                    <li class="items-center">
                        <a class="has-sub {{ request()->is("admin/countries*")||request()->is("admin/cities*")||request()->is("admin/profiles*")||request()->is("admin/profile-datas*")||request()->is("admin/currency-plans*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="#" onclick="window.openSubNav(this)">
                            <i class="fa-fw fas c-sidebar-nav-icon fa-cogs">
                            </i>
                            {{ trans('cruds.suporte.title') }}
                        </a>
                        <ul class="ml-4 subnav hidden">
                            @can('country_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/countries*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.countries.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.country.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('city_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/cities*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.cities.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.city.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('profile_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/profiles*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.profiles.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.profile.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('profile_data_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/profile-datas*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.profile-datas.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.profileData.title') }}
                                    </a>
                                </li>
                            @endcan
                            @can('currency_plan_access')
                                <li class="items-center">
                                    <a class="{{ request()->is("admin/currency-plans*") ? "sidebar-nav-active" : "sidebar-nav" }}" href="{{ route("admin.currency-plans.index") }}">
                                        <i class="fa-fw c-sidebar-nav-icon fas fa-cogs">
                                        </i>
                                        {{ trans('cruds.currencyPlan.title') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                @if(file_exists(app_path('Http/Controllers/Auth/UserProfileController.php')))
                    @can('auth_profile_edit')
                        <li class="items-center">
                            <a href="{{ route("profile.show") }}" class="{{ request()->is("profile") ? "sidebar-nav-active" : "sidebar-nav" }}">
                                <i class="fa-fw c-sidebar-nav-icon fas fa-user-circle"></i>
                                {{ trans('global.my_profile') }}
                            </a>
                        </li>
                    @endcan
                @endif

                <li class="items-center">
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();" class="sidebar-nav">
                        <i class="fa-fw fas fa-sign-out-alt"></i>
                        {{ trans('global.logout') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>