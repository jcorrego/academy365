@extends('layouts.app')

@section('content')
    <x-pages.header title="User certificate for: {{ $certificate->course->name }}"
                    description="This is your certificate"></x-pages.header>
    <div class="mx-auto sm:px-6 lg:px-8 my-8">
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