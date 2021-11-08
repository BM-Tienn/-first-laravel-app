<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('home-page')" :active="request()->routeIs('home-page')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('service-page')" :active="request()->routeIs('service-page')">
                        {{ __('Service') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about-page')" :active="request()->routeIs('about-page')">
                        {{ __('About') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contact-page')" :active="request()->routeIs('contact-page')">
                        {{ __('Contact') }}
                    </x-nav-link>
                </div>
            </div>
        </div>
    </div>
</nav>
