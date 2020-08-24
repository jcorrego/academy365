@extends('layouts.app')

@section('content')
    <x-pages.header title="User certificate for: {{ $certificate->course->name }}"
                    action="{{ route('certificate-download', $certificate->id) }}"
                    action-label='<i class="fad fa-download mr-2"></i>Download'
                    description="This is your certificate"></x-pages.header>
    <div class="mx-auto sm:px-6 lg:px-8 my-8">
        @if (session('test_passed'))
            <div class="rounded-md bg-green-50 p-4 mb-6 border-green-500 border">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm leading-5 font-medium text-green-800">
                        Congratulations!
                    </h3>
                    <div class="mt-2 text-sm leading-5 text-green-700">
                        <p>
                            You have cleared the test, here's your certificate.
                        </p>
                    </div>
                    <div class="mt-4">
                        <div class="-mx-2 -my-1.5 flex">
                            <a href="{{ route('certificate-download', $certificate->id) }}" class="px-2 py-1.5 rounded-md text-sm leading-5 font-medium text-green-800 hover:bg-green-100 focus:outline-none focus:bg-green-100 transition ease-in-out duration-150">
                                <i class="fad fa-download mr-2"></i>Download
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="bg-white overflow-hidden shadow rounded-lg max-w-4xl mx-auto">
            <div class="px-4 py-12 text-center">
                <img src="{{ asset('img/logos/academy365.png') }}" alt="Academy365.net" class="mx-auto">
                <div class="my-5 text-saira text-3xl font-bold">Certificate of Completion</div>
                <div class="my-5">THIS IS TO CERTIFY THAT</div>
                <div class="my-5 text-5xl text-saira" style="color: #509BF8;">{{ auth()->user()->name }}</div>
                <div class="my-5">has successfully completed the <strong>{{ $certificate->course->name }}</strong></div>
                <div class="my-5 max-w-lg mx-auto">{{ $certificate->course->description }}</div>
                <div class="my-5 text-sm">Issued on: {{ date('Y-m-d') }}
                    <p class="text-saira">
                        <br><span style="color:#7ABB98 !important;">by</span> <br> <br>
                        Academy<span style="color:#E67BD3 !important;">3</span><span style="color:#509BF8 !important;">6</span><span style="color:#7ABB98 !important;">5</span>.net
                    </p>
                </div>
                <div class="text-xs text-gray-500">Verify at help@academy365.net <br>
                    Company has confirmed & verified the participation of this individual in the course.</div>
            </div>
        </div>
    </div>
@endsection