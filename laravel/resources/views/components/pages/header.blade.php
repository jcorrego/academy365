@props(['title','description'=>'','create'=>'', 'createLabel'=>'Create','action'=>'', 'actionLabel'=>'Action'])
<div class="border-b bg-white border-gray-200 px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
    <div class="flex-1 min-w-0">
        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
            {{ $title }}
        </h2>
        @if($description)
        <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap">
            <div class="mt-2 flex items-center text-sm leading-5 text-gray-500 sm:mr-6">
                {!!  $description  !!}
            </div>
        </div>
        @endif
    </div>
    @if($create)
        <x-forms.button href="{{ $create }}" id="create"><i class="fad fa-plus mr-2"></i> {{ $createLabel }}</x-forms.button>
    @endif
    @if($action)
        <x-forms.button href="{{ $action }}" id="action">{!!  $actionLabel !!}</x-forms.button>
    @endif
</div>