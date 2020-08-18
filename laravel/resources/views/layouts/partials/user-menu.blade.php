<div x-data="{ isOpen: false }" class="ml-3 relative">
    <div>
        <button @click="isOpen = !isOpen" class="max-w-xs flex items-center text-sm rounded-full focus:outline-none focus:bg-cool-gray-100 lg:p-2 lg:rounded-md lg:hover:bg-cool-gray-100" id="user-menu" aria-label="User menu" aria-haspopup="true">
            <i class="fad fa-user-circle text-4xl"></i>
            <p class="hidden ml-3 text-cool-gray-700 text-sm leading-5 font-medium lg:block">{{ Auth::user()->name }}</p>
            <svg class="hidden flex-shrink-0 ml-1 h-5 w-5 text-cool-gray-400 lg:block" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
        </button>
    </div>
    <div x-show="isOpen" x-on:click.away="isOpen = false"
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
        <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
            <a href="{{ route('change-password') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">Update Password</a>
            <a href="{{ route('logout') }}"
               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150"
               role="menuitem"
               onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">{{ __('Sign out') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>