<div class="flex-shrink-0 flex border-b border-blue-700 p-4">
    <a href="#" class="flex-shrink-0 w-full group block">
        <div class="flex items-center">
            <div>
                <i class="fad fa-user-circle text-4xl text-white"></i>
            </div>
            <div class="ml-3">
                <p class="text-xs leading-4 font-medium text-blue-300 group-hover:text-blue-100 transition ease-in-out duration-150">
                    Welcome
                </p>
                <p class="text-sm leading-5 font-medium text-white">
                    {{ Auth::user()->name}}
                </p>
            </div>
        </div>
    </a>
</div>
