<div class="relative z-10 flex-shrink-0 flex h-16 bg-white shadow">
    <button @click="sidebarOpen = !sidebarOpen" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:bg-gray-100 focus:text-gray-600 md:hidden" aria-label="Open sidebar">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
        </svg>
    </button>
    <div class="flex-1 px-4 flex justify-between">
        <div class="flex-1 flex items-center">
            @guest
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logos/academy365.png') }}" alt="Academy365" class="h-9">
                </a>
            @endguest
        </div>
        <div class="ml-4 flex items-center md:ml-6">
            @guest
                <a class="no-underline hover:underline text-cool-gray-700 leading-5 text-sm font-medium p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                <a class="no-underline hover:underline text-cool-gray-700 leading-5 text-sm font-medium p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
            @else
                @include('layouts.partials.user-menu')
            @endguest
        </div>
    </div>
</div>