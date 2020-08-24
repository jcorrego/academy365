@extends('layouts.app')

@section('content')
    <x-pages.header title="Home page" description="Welcome to Academy365.net courses."></x-pages.header>
    <div class="mx-auto sm:px-6 lg:px-8 mt-8">
    <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        @foreach($courses as $course)
        <li class="col-span-1 bg-white rounded-lg shadow">
            <div class="w-full flex items-center justify-between p-6 space-x-6">
                <div class="flex-1">
                    <div class="flex items-center space-x-3">
                        <h3 class="text-gray-900 text-sm leading-5 font-medium truncate">{{ $course->name }}</h3>
                        @if($course->status == 'active')
                            <span class="flex-shrink-0 inline-block px-2 py-0.5 text-teal-800 text-xs leading-4 font-medium bg-teal-100 rounded-full">Active</span>
                        @else
                            <span class="flex-shrink-0 inline-block px-2 py-0.5 text-xs leading-4 font-medium bg-gray-100 text-gray-800 rounded-full">Blocked</span>
                        @endif
                    </div>
                    <p class="mt-1 text-gray-500 text-sm leading-5">{{ $course->description }}</p>
                    <p class="mt-4 text-gray-500 text-sm leading-5">Access valid until:
                        <span class="flex-shrink-0 inline-block px-2 py-0.5 text-teal-800 text-xs leading-4 font-medium bg-teal-100 rounded-full">{{ $course->valid }}</span>
                    </p>
                </div>
            </div>
            <div class="border-t border-gray-200">
                @if($course->status == 'active')
                <div class="-mt-px flex">
                    <div class="w-0 flex-1 flex border-r border-gray-200">
                        <a href="{{ route('module',md5($course->modules()->first()->id)) }}" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                            <span class="ml-3">Take course</span>
                        </a>
                    </div>
                    <div class="-ml-px w-0 flex-1 flex">
                        <a href="#" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                            <span class="ml-3">Take test</span>
                        </a>
                    </div>
                </div>
                @else
                    <div class="-mt-px flex">
                        <div class="w-0 flex-1 flex border-r border-gray-200">
                            <span class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                                None of the course has been assigned to you yet if you have purchased one you can drop an email to help@academy365.net & we will assign it to you within 24 hours of purchase or you can visit the website to buy one (https://www.academy365.net)
                            </span>
                        </div>
                    </div>
                @endif
            </div>
        </li>
        @endforeach
        <li class="col-span-1 bg-gray-50 rounded-lg shadow">
            <div class="w-full flex items-center justify-between p-6 space-x-6">
                <div class="flex-1 truncate">
                    <div class="flex items-center space-x-3">
                        <h3 class="text-gray-900 text-sm leading-5 font-medium truncate">More courses coming soon</h3>
                        <span class="flex-shrink-0 inline-block px-2 py-0.5 text-teal-800 text-xs leading-4 font-medium bg-teal-100 rounded-full">Active</span>
                    </div>
                    <p class="mt-1 text-gray-500 text-sm leading-5 truncate">...</p>
                </div>
            </div>
            
        </li>
    </ul>
    </div>

@endsection
