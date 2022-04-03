<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
                <div class="hidden sm:flex sm:items-center sm:ml-6 {{ (request()->routeIs('events.*') || 
                                                                       request()->routeIs('event-social-medias.*') || 
                                                                       request()->routeIs('important-dates.*') || 
                                                                       request()->routeIs('topic-of-interests.*') ||
                                                                       request()->routeIs('topic-of-interest-scopes.*') ||
                                                                       request()->routeIs('committee-divisions.*') ||
                                                                       request()->routeIs('committees.*') ||
                                                                       request()->routeIs('fee-types.*') ||
                                                                       request()->routeIs('partnerships.*') ||
                                                                       request()->routeIs('settings.*') ?? false) ? 'border-b-2 border-indigo-400':''}}">
                    <x-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium {{ (request()->routeIs('events.*') || 
                                                                                     request()->routeIs('event-social-medias.*') || 
                                                                                     request()->routeIs('important-dates.*') || 
                                                                                     request()->routeIs('topic-of-interests.*') ||
                                                                                     request()->routeIs('topic-of-interest-scopes.*') ||
                                                                                     request()->routeIs('committee-divisions.*') ||
                                                                                     request()->routeIs('committees.*') ||
                                                                                     request()->routeIs('fee-types.*') ||
                                                                                     request()->routeIs('partnerships.*') ||
                                                                                     request()->routeIs('settings.*') ?? false) ? 'text-gray-900':'text-gray-500'}} hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>Web Configuration</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('events.index')" :class="(request()->routeIs('events.*') ?? false) ? 'text-primary':''">
                                Event
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('event-social-medias.index')" :class="(request()->routeIs('event-social-medias.*') ?? false) ? 'text-primary':''">
                                Event Social Media
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('important-dates.index')" :class="(request()->routeIs('important-dates.*') ?? false) ? 'text-primary':''">
                                Important Dates
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('topic-of-interests.index')" :class="(request()->routeIs('topic-of-interests.*') ?? false) ? 'text-primary':''">
                                Topic of Interest
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('topic-of-interest-scopes.index')" :class="(request()->routeIs('topic-of-interest-scopes.*') ?? false) ? 'text-primary':''">
                                Topic of Interest Scope
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('committee-divisions.index')" :class="(request()->routeIs('committee-divisions.*') ?? false) ? 'text-primary':''">
                                Committee Division
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('committees.index')" :class="(request()->routeIs('committees.*') ?? false) ? 'text-primary':''">
                                Committee
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('fee-types.index')" :class="(request()->routeIs('fee-types.*') ?? false) ? 'text-primary':''">
                                Fee Types
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('partnerships.index')" :class="(request()->routeIs('partnerships.*') ?? false) ? 'text-primary':''">
                                Partnership
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('settings.index')" :class="(request()->routeIs('settings.*') ?? false) ? 'text-primary':''">
                                Settings
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
                <div class="hidden sm:flex sm:items-center sm:ml-6 {{ (request()->routeIs('speakers.*') || 
                                                                       request()->routeIs('speaker-social-profiles.*') || 
                                                                       request()->routeIs('reviewers.*') || 
                                                                       request()->routeIs('reviewer-social-profiles.*') ?? false) ? 'border-b-2 border-indigo-400':''}}">
                    <x-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium {{ (request()->routeIs('speakers.*') || 
                                                                                     request()->routeIs('speaker-social-profiles.*') || 
                                                                                     request()->routeIs('reviewers.*') || 
                                                                                     request()->routeIs('reviewer-social-profiles.*') ?? false) ? 'text-gray-900':'text-gray-500'}} hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>Speakers & Reviewer</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('speakers.index')" :class="(request()->routeIs('speakers.*') ?? false) ? 'text-primary':''">
                                Speakers
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('speaker-social-profiles.index')" :class="(request()->routeIs('speaker-social-profiles.*') ?? false) ? 'text-primary':''">
                                Speakers Social Profile
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('reviewers.index')" :class="(request()->routeIs('reviewers.*') ?? false) ? 'text-primary':''">
                                Reviewers
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('reviewer-social-profiles.index')" :class="(request()->routeIs('reviewer-social-profiles.*') ?? false) ? 'text-primary':''">
                                Reviewers Social Profile
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
                <div class="hidden sm:flex sm:items-center sm:ml-6 {{ (request()->routeIs('documents.*') || 
                                                                       request()->routeIs('guidelines.*') ?? false) ? 'border-b-2 border-indigo-400':''}}">
                    <x-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium {{ (request()->routeIs('documents.*') || 
                                                                                     request()->routeIs('guidelines.*') ?? false) ? 'text-gray-900':'text-gray-500'}} hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>Document & Guideline</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('documents.index')" :class="(request()->routeIs('documents.*') ?? false) ? 'text-primary':''">
                                Document
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('guidelines.index')" :class="(request()->routeIs('guidelines.*') ?? false) ? 'text-primary':''">
                                Guideline
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>

                <div class="hidden sm:flex sm:items-center sm:ml-6 {{ (request()->routeIs('publication-fields.*') || 
                                                                       request()->routeIs('publication-tags.*') || 
                                                                       request()->routeIs('publications.*') ?? false) ? 'border-b-2 border-indigo-400':''}}">
                    <x-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium {{ (request()->routeIs('publication-fields.*') || 
                                request()->routeIs('publication-tags.*') || 
                                request()->routeIs('publications.*') ?? false) ? 'text-gray-900':'text-gray-500'}} hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>Publication</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            
                            <x-dropdown-link :href="route('publications.index')" :class="(request()->routeIs('publications.*') ?? false) ? 'text-primary':''">
                                Publication
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
