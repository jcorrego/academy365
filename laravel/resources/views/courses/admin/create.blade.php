@extends('layouts.app')

@section('content')
    <x-pages.header title="New order"
                    description="Here you can define a new order and its options"></x-pages.header>
    <div class="mx-auto sm:px-6 lg:px-8 my-8">
        <form action="{{ route('order-store') }}" method="POST">
            @csrf
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">General</h3>
                        <p class="mt-1 text-sm leading-5 text-gray-600">
                            Using this information, the user will have access to the corresponding course.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-6 space-y-6">
                            <x-forms.input id="email" label="User email" placeholder="user@example.com"></x-forms.input>
                            <x-forms.input id="wp_order" label="Ecommerce order" placeholder=""></x-forms.input>
                            <x-forms.select id="course_id" label="Course" :options="$courses"></x-forms.select>
                            <x-forms.input id="valid" label="Valid until" help="This is the final date for the user to access the course" placeholder="YYYY-MM-DD"></x-forms.input>
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