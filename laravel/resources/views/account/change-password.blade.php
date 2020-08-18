@extends('layouts.app')

@section('content')
    <x-pages.header title="Update you password"
                    description="Here you can update your password for accessing this platform"></x-pages.header>
    <div class="mx-auto sm:px-6 lg:px-8 my-8">
        <form action="{{ route('update-password') }}" method="POST">
            @csrf
            @method('put')
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">User password</h3>
                        <p class="mt-1 text-sm leading-5 text-gray-600">
                            Please use a secure password
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-6 space-y-6">
                            <x-forms.input id="current_password" label="Current Password" placeholder="******" help="Please confirm your current password here"></x-forms.input>
                            <div class="hidden sm:block">
                                <div class="py-5">
                                    <div class="border-t border-gray-200"></div>
                                </div>
                            </div>
                            <x-forms.input id="new_password" label="New Password" placeholder="******" help="Write a new password. Min 6 chars"></x-forms.input>
                            <x-forms.input id="new_password_confirmation" label="Confirm Password" placeholder="******" help="Confirm your new password here."></x-forms.input>
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