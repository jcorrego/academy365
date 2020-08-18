@extends('layouts.app')

@section('content')
    <x-pages.header title="Editing test for course: {{ $test->course->name }}" 
                    create="{{ route('question-create',$test->id) }}"
                    create-label="Add question"
                    description="Here you can update questions for this test"></x-pages.header>
    <div class="mx-auto sm:px-6 lg:px-8 my-8">
        <div class="flex flex-col">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Question
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Description
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Options
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Answer
                            </th>
                            <th class="px-6 py-3 bg-gray-50"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($test->questions as $question)
                            <tr class="{{ $loop->even?'bg-gray-50':'bg-white' }}">
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                    {{ $question->name }}
                                </td>
                                <td class="px-6 py-4 text-sm leading-5 text-gray-500">
                                    {{ $question->description }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    {{ $question->options ? count($question->options) : '-' }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    {{ $question->answer >=0 && $question->options && isset($question->options[$question->answer]) ? $question->options[$question->answer] : '-'}}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                    <x-forms.button href="{{ route('question-edit',[$test->id,$question->id]) }}" format="white" size="xs"><i class="fad fa-edit mr-2"></i> Edit</x-forms.button>
                                    <x-forms.button href="{{ route('question-delete',[$test->id,$question->id]) }}" format="white" id="{{ $question->id }}" method="delete" size="xs"><i class="fad fa-trash mr-2"></i> Delete</x-forms.button>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="5" class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    No questions yet. Start by
                                    <a class="text-indigo-500" href="{{ route('question-create',$test->id) }}">creating</a> one. 
                                </td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection