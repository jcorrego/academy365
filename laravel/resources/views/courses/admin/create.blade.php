@extends('layouts.app')

@section('content')
    <x-pages.header title="New course"
                    description="Here you can define a new course and its options"></x-pages.header>
    <div class="mx-auto sm:px-6 lg:px-8 my-8">
        <form action="{{ route('course-store') }}" method="POST">
            @csrf
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">General</h3>
                        <p class="mt-1 text-sm leading-5 text-gray-600">
                            General course information
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-6 space-y-6">
                            <x-forms.input id="name" label="Course name" placeholder="Write here a descriptive name"></x-forms.input>
                            <x-forms.textarea id="description" label="Description" placeholder="Describe the course"></x-forms.textarea>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <x-forms.button type="submit"><i class="fad fa-save mr-2"></i>Save</x-forms.button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection