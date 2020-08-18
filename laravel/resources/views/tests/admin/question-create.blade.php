@extends('layouts.app')

@section('content')
    <x-pages.header title="New question for: {{ $test->course->name }}"
                    description="Here you can define a new question and its options"></x-pages.header>
    <div class="mx-auto sm:px-6 lg:px-8 my-8">
        <form action="{{ route('question-store',$test->id) }}" method="POST">
            @csrf
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">General</h3>
                        <p class="mt-1 text-sm leading-5 text-gray-600">
                            This information will be presented to the user when taking the test.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-6 space-y-6">
                            <x-forms.input id="name" label="Question" placeholder="Ex. What was the main topic?"></x-forms.input>
                            <x-forms.textarea id="description" label="Description" placeholder="Describe the question in detail" help="Question description text to be presented to the user."></x-forms.textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden sm:block">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Options</h3>
                        <p class="mt-1 text-sm leading-5 text-gray-600">
                            These are the answers options presented to the user. One option is the right answer.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-6 space-y-6">
                            @for ($i = 0; $i < 4; $i++)
                                <div>
                                    <x-forms.input id="options[{{ $i }}]" label="Option # {{ $i+1}}" placeholder="This is a possible answer..."></x-forms.input>
                                    <div class="mt-1 flex items-center">
                                        <input id="option_{{ $i }}" name="answer" value="{{ $i }}" type="radio" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                                        <label for="option_{{ $i }}" class="ml-3">
                                            <span class="block text-sm leading-5 font-medium text-gray-700">This is the correct answer</span>
                                        </label>
                                    </div>    
                                </div>
                            @endfor
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <span class="inline-flex rounded-md shadow-sm">
                          <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Save
                          </button>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection