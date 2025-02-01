<nav class="w-full flex-1">
    <!-- Primary Navigation Menu -->
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-6">
            <ul class="flex flex-col gap-6">
                <x-nav-list fontawesome="fa-solid fa-list" title="カテゴリー編集" link="show.category"/>
                <x-nav-list fontawesome="fa-solid fa-image" title="画像編集" link="Show"/>
            </ul>

            <p class="border-b border-solid border-gray-200"></p>

            <ul class="flex flex-col gap-6">
                <x-nav-list fontawesome="fa-solid fa-house" title="ユーザーページ" link="Show"/>
                <x-nav-list fontawesome="fa-solid fa-gear" title="マイページ" link="profile.edit"/>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{route('logout')}}"
                       onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <li class="flex items-center gap-4">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <p>ログアウト</p>
                        </li>
                    </a>
                </form>
            </ul>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
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
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

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
