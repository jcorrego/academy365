@extends('layouts.app')

@section('content')
    <x-pages.header title="{{ $module->name }}" description="<i class='fad fa-graduation-cap mr-2'></i> {{ $module->course->name }}"></x-pages.header>
    <div class="pt-2 pb-6 md:py-6">
        <div class="px-10">
            <div class="w-full">
                <video width="100%" height="100%" oncontextmenu="return false;" src="{{ route('play',md5($module->id)) }}?tm=<?php echo microtime()?>" controls controlsList="nodownload"></video>
            </div>
            <div class="flex justify-between items-center py-6">
                <div>
                    @if(isset($prev) && $prev)
                        <span class="inline-flex rounded-md shadow-sm">
              <a href="{{ route('module',md5($prev->id)) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-teal-600 hover:bg-teal-500 focus:outline-none focus:border-teal-700 focus:shadow-outline-indigo active:bg-teal-700 transition ease-in-out duration-150">
                Previous: <span class="text-teal-50 italic">{{ $prev->name }}</span>
              </a>
            </span>
                    @endif
                </div>
                <div>
                    @if(isset($next) && $next)
                        <span class="inline-flex rounded-md shadow-sm">
              <a href="{{ route('module',md5($next->id)) }}" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-teal-600 hover:bg-teal-500 focus:outline-none focus:border-teal-700 focus:shadow-outline-indigo active:bg-teal-700 transition ease-in-out duration-150">
                Next: <span class="text-teal-50 italic">{{ $next->name }}</span>
              </a>
            </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
