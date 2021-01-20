<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-no-wrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div class="md:flex-col md:items-stretch md:min-h-full md:flex-no-wrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <i class="fas fa-bars"></i></button>
        <a class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0" href="{{ route('dashboard') }}">
            Interna
        </a>
        <!-- Mobile -->
        <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="inline-block relative">
                <a class="text-gray-600 block" onclick="openDropdown(event,'user-responsive-dropdown')">
                    <div class="items-center flex">
                            <span class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full">
                                <img alt="{{ Auth::user()->name }}" class="w-full rounded-full align-middle border-none shadow-lg" src="{{ Auth::user()->profile_photo_url }}"/>
                            </span>
                    </div>
                </a>
                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1" style="min-width: 12rem;" id="user-responsive-dropdown">
                    <a href="{{ route('profile.show') }}" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800" :active="request()->routeIs('profile.show')">Profile</a>
                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <a href="{{ route('api-tokens.index') }}" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800" :active="request()->routeIs('api-tokens.index')">API Tokens</a>
                    @endif
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <a class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Manage Team</a>
                        <a href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800" :active="request()->routeIs('teams.show')">Team Settings</a>
                        <a href="{{ route('teams.create') }}" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800" :active="request()->routeIs('teams.create')">Create New Team</a>
                        <a class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Switch Teams</a>
                        @foreach (Auth::user()->allTeams() as $team)
                            <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                        @endforeach
                    @endif
                    <div class="h-0 my-2 border border-solid border-gray-200"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                    </form>
                </div>
            </li>
        </ul>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-gray-300">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0" href="javascript:void(0)">
                            Interna
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        <i class="fas fa-tv opacity-75 mr-2 text-sm"></i>{{ __('Dashboard') }}
                    </x-jet-nav-link>
                </li>
                @canany(['admin_timeline_access', 'user_timeline_access'])
                    <li class="items-center">
                        <x-jet-nav-link href="{{ route('timeline.index') }}" :active="request()->routeIs('timeline.*')">
                            <i class="fas fa-calendar opacity-75 mr-2 text-sm"></i>{{ __('Timeline') }}
                        </x-jet-nav-link>
                    </li>
                @endcan
                @can('administrative_data_access')
                    <li class="items-center">
                        <x-jet-nav-link href="{{ route('administrative.index') }}" :active="request()->routeIs('administrative.*')">
                            <i class="fas fa-file-signature opacity-75 mr-2 text-sm"></i>{{ __('Administrative Data') }}
                        </x-jet-nav-link>
                    </li>
                @endcan
                @can('report_access')
                    <li class="items-center">
                        <x-jet-nav-link href="{{ route('report.index') }}" :active="request()->routeIs('report.*')">
                            <i class="fas fa-file-alt opacity-75 mr-2 text-sm"></i>{{ __('Report') }}
                        </x-jet-nav-link>
                    </li>
                @endcan
                @can('company_access')
                    <li class="items-center">
                        <x-jet-nav-link href="{{ route('company.index') }}" :active="request()->routeIs('company.*')">
                            <i class="fas fa-building opacity-75 mr-2 text-sm"></i>{{ __('Company Data') }}
                        </x-jet-nav-link>
                    </li>
                @endcan
                @can('user_access')
                    <li class="items-center">
                        <x-jet-nav-link href="{{ route('user.index') }}" :active="request()->routeIs('user.*')">
                            <i class="fas fa-user opacity-75 mr-2 text-sm"></i>{{ __('User') }}
                        </x-jet-nav-link>
                    </li>
                @endcan
            </ul>
        </div>
    </div>
</nav>
