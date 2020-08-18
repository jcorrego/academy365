@include('layouts.partials.menu.logo')
<div class="mt-2 flex-1 h-0 overflow-y-auto">
    @include('layouts.partials.menu.sidebar-welcome')
    <nav class="mt-5 px-2">
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