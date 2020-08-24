@extends('layouts.app')

@section('content')
    <x-pages.header title="Available courses tests" description="These are all the available tests. In order for you to take a test, you need to have access to the related course."></x-pages.header>
    <div class="mx-auto sm:px-6 lg:px-8 mt-8">
        @if (session('test_failed'))
            <div class="rounded-md bg-red-50 p-4 mb-6 border border-red-500">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm leading-5 font-medium text-red-800">
                            Bad Luck!
                        </h3>
                        <div class="mt-2 text-sm leading-5 text-red-700">
                            <p>Maybe next time you will be able to perform much better. Click <a href="{{ route('test-take',session('test_failed')) }}">here</a> to retake the test</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="flex flex-col">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Course
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Questions
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Taken
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Score
                            </th>
                            <th class="px-6 py-3 bg-gray-50"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($tests as $test)
                            @php
                            $user = $test->users()->where('user_id',auth()->user()->id)->first();
                            @endphp
                            <tr class="bg-white even:bg-gray-50">
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                    <i class="fal fa-graduation-cap mr-2"></i>{{ $test->course->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    {{ $test->questions()->count() }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    @if($user)
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-green-100 text-green-800">{{ $user->pivot->created_at }}</span>
                                        
                                    @else
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-pink-100 text-pink-800">Not taken yet</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    @if($user)
                                    {{ round(100*$user->pivot->score/$test->questions->count()) }}% <span class="italic">({{ $user->pivot->score }} / {{ $test->questions->count() }})</span>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                    @if($user && round(100*$user->pivot->score/$test->questions()->count()) < 50)
                                        <x-forms.button href="{{ route('test-take',$test->id) }}" size="xs"><i class="fad fa-edit mr-2"></i> Re-take test</x-forms.button>
                                    @elseif(!$user)
                                        <x-forms.button href="{{ route('test-take',$test->id) }}" size="xs"><i class="fad fa-edit mr-2"></i> Take test</x-forms.button>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr class="bg-white even:bg-gray-50">
                                <td colspan="5" class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                    You dont have tests available.
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    <nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-cool-gray-200 sm:px-6">
                        <div class="hidden sm:block">
                            <p class="text-sm leading-5 text-cool-gray-700">
                                Showing
                                <span class="font-medium">1</span>
                                to
                                <span class="font-medium">{{ $tests->count() }}</span>
                                of
                                <span class="font-medium">{{ $tests->count() }}</span>
                                results
                            </p>
                        </div>
                        {{--                            <div class="flex-1 flex justify-between sm:justify-end">--}}
                        {{--                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-cool-gray-300 text-sm leading-5 font-medium rounded-md text-cool-gray-700 bg-white hover:text-cool-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-cool-gray-100 active:text-cool-gray-700 transition ease-in-out duration-150">--}}
                        {{--                                    Previous--}}
                        {{--                                </a>--}}
                        {{--                                <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-cool-gray-300 text-sm leading-5 font-medium rounded-md text-cool-gray-700 bg-white hover:text-cool-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-cool-gray-100 active:text-cool-gray-700 transition ease-in-out duration-150">--}}
                        {{--                                    Next--}}
                        {{--                                </a>--}}
                        {{--                            </div>--}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection