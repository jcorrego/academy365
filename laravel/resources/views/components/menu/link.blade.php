@props(['href'])
<a href="{{ $href }}" {{ $attributes->merge(['class' => 'group flex items-center px-2 py-2 text-base md:text-sm leading-6 md:leading-5 font-medium text-blue-300 rounded-md hover:text-white hover:bg-blue-700 focus:outline-none focus:text-white focus:bg-blue-700 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>