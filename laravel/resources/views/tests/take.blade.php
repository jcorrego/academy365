@extends('layouts.app')

@section('content')
    <x-pages.header title="Taking test for: {{ $test->course->name }}"
                    description="Here you can update this question and its options"></x-pages.header>
    <div class="mx-auto sm:px-6 lg:px-8 my-8">
        <form action="{{ route('test-submit',[$test->id]) }}" method="POST">
            @csrf
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Questions</h3>
                        <p class="mt-1 text-sm leading-5 text-gray-600">
                            Please answer all the questions to be evaluated.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-6 space-y-6">
                            @foreach ($test->questions as $question)
                                <div class="mt-6  pt-6 first:mt-0 border-t border-gray-200 first:border-t-0">
                                    <fieldset class="">
                                        <legend class="text-base font-medium text-gray-900">
                                            {{ $question->name }}
                                        </legend>
                                        <p class="text-sm leading-5 text-gray-500">{{ $question->description }}</p>
                                        @error('question_'.$question->id)
                                        <p class="mt-2 text-sm text-red-600" id="question-error">The answer to this question is required</p>
                                        @enderror
                                        <div class="flex w-full mt-6">
                                            @foreach($question->options as $option)
                                                <div class="p-1 flex-1">
                                                    <div class="flex items-center">
                                                        <input id="question_{{ $question->id }}_option_{{ $loop->index }}" name="question_{{ $question->id }}" value="{{ $loop->index }}" type="radio" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" {{ old('question_'. $question->id) != null && old('question_'. $question->id) == $loop->index?'checked':'' }}>
                                                        <label for="question_{{ $question->id }}_option_{{  $loop->index }}" class="ml-3">
                                                            <span class="block text-sm leading-5 font-medium text-gray-700">{{ $option }}</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </fieldset>
                                </div>
                                
{{--                                <div>--}}
{{--                                    <x-forms.input id="options[{{ $i }}]" label="Option # {{ $i+1}}" placeholder="This is a possible answer..." value="{{ $question->options[$i] ?? '' }}"></x-forms.input>--}}
{{--                                    <div class="mt-1 flex items-center">--}}
{{--                                        <input id="option_{{ $i }}" name="answer" value="{{ $i }}" type="radio" --}}
{{--                                               {{ $question->answer === $i ? 'checked' : '' }}--}}
{{--                                               class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">--}}
{{--                                        <label for="option_{{ $i }}" class="ml-3">--}}
{{--                                            <span class="block text-sm leading-5 font-medium text-gray-700">This is the correct answer</span>--}}
{{--                                        </label>--}}
{{--                                    </div>    --}}
{{--                                </div>--}}
                            @endforeach
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <x-forms.button type="submit"><i class="fad fa-save mr-2"></i>Send test</x-forms.button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection