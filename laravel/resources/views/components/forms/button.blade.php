@props(['href'=>'#','method'=>'get','id'=>'', 'type'=>'link', 'format'=>'primary', 'size'=>'base'])
@php
    $class = "inline-flex items-center border font-medium focus:outline-none transition ease-in-out duration-150";
    if($format == 'primary') $class .= "border-transparent text-white bg-indigo-600 hover:bg-indigo-500 focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700";
    elseif($format == 'secondary') $class .= " border-transparent text-indigo-700 bg-indigo-100 hover:bg-indigo-50  focus:border-indigo-300 focus:shadow-outline-indigo active:bg-indigo-200";
    else $class .= " border-gray-300 text-gray-700 bg-white hover:text-gray-500  focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50";
    
    if($size=='xs') $class .= " px-2.5 py-1.5 text-xs leading-4  rounded";
    elseif($size=='sm') $class .= " px-3 py-2 text-sm leading-4 rounded-md";
    elseif($size=='lg') $class .= " px-4 py-2 text-base leading-6 rounded-md";
    elseif($size=='xl') $class .= " px-6 py-3 text-base leading-6 rounded-md";
    else $class .= " px-4 py-2 text-sm leading-5 rounded-md";
@endphp

<span class="inline-flex rounded-md shadow-sm">
    @if($type == 'link')
        <a href="{{ $href }}"
           @if($method == 'delete')
           onclick="event.preventDefault();document.getElementById('delete-form-{{ $id }}').submit();"
           @endif
           class="{{ $class }}">
        {{ $slot }}
    </a>
    @elseif($type == 'submit')
        <button type="submit" class="{{ $class }}" {{ $id?'id='.$id:'' }} {{ $id?'name='.$id:'' }} >
            {{ $slot }}
        </button>
    @endif
    @if($method == 'delete')
        <form id="delete-form-{{ $id }}" action="{{ $href }}" method="POST" class="hidden">
            @csrf
            @method('delete')
        </form>
    @endif
</span>
