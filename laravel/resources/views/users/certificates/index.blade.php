@extends('layouts.app')

@section('content')
    <x-pages.header title="My certificates" description="This are your available certificates. You get a certificate when you pass a course test."></x-pages.header>
    <div class="mx-auto sm:px-6 lg:px-8 mt-8">
        <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @forelse($certificates as $certificate)
                <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow">
                    <div class="flex-1 flex flex-col p-8">
                        <div class="text-center text-blue-800"><i class="fad fa-certificate text-6xl"></i></div>
                        <h3 class="mt-6 text-gray-900 text-sm leading-5 font-medium">{{ $certificate->course->name }}</h3>
                        <dl class="mt-1 flex-grow flex flex-col justify-between">
                            <dd class="text-gray-500 text-sm leading-5">Finished:</dd>
                            <dd class="mt-3">
                                <span class="px-2 py-1 text-teal-800 text-xs leading-4 font-medium bg-teal-100 rounded-full">{{ $certificate->created_at }}</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="border-t border-gray-200">
                        <div class="-mt-px flex">
                            <div class="w-0 flex-1 flex border-r border-gray-200">
                                <a href="{{ route('certificate-view',$certificate->id) }}" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                                    <i class="fad fa-eye"></i><span class="ml-3">View</span>
                                </a>
                            </div>
                            <div class="-ml-px w-0 flex-1 flex">
                                <a href="#" class="text-gray-500 relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                                    <i class="fad fa-download"></i><span class="ml-3">Download (soon)</span>
                                    <br>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </li>
            @empty
                <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow">
                    <div class="flex-1 flex flex-col p-8">
                        You dont have any certificates available
                    </div>
                </li>
            @endforelse
        </ul>
    </div>

@endsection
