@extends('layouts.app')

@section('content')
    <x-pages.header title="Edit order"
                    description="Here you can update this order information"></x-pages.header>
    <div class="mx-auto sm:px-6 lg:px-8 my-8">
        <form action="{{ route('order-update',[$order->id]) }}" method="POST">
            @csrf
            @method('put')
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
                            <x-forms.input id="email" label="User email" placeholder="user@example.com" value="{{ $order->email }}"></x-forms.input>
                            <x-forms.input id="wp_order" label="Ecommerce order" placeholder="" value="{{ $order->wp_order }}"></x-forms.input>
                            <x-forms.select id="course_id" label="Course" value="{{ $order->course_id }}" :options="$courses"></x-forms.select>
                            <x-forms.input id="valid" label="Valid until" help="This is the final date for the user to access the course" placeholder="YYYY-MM-DD" value="{{ $order->valid ? $order->valid->toDateString():'' }}"></x-forms.input>
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