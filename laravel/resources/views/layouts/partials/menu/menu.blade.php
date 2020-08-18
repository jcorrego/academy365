<div class="flex flex-col h-0 flex-1 bg-blue-800">
    <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
        @include('layouts.partials.menu.logo')
        @include('layouts.partials.menu.sidebar-welcome')
        <nav class="mt-5 flex-1 px-2 bg-blue-800">
            <div class="space-y-1">
                @include('layouts.partials.menu.courses')
            </div>
            @if(auth()->user()->type == 'admin')
                <div class="mt-8">
                    @include('layouts.partials.menu.admin')   
                </div>
            @endif
        </nav>
    </div>
</div>