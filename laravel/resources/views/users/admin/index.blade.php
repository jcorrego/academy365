@extends('layouts.app')

@section('content')
    <x-pages.header title="Registered users" description="Users should registered by themselves in the platform. Here you can view assigned orders."></x-pages.header>
    <div class="mx-auto sm:px-6 lg:px-8 mt-8">
        <div class="flex flex-col">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Orders
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Registered
                            </th>
                            <th class="px-6 py-3 bg-gray-50"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <!-- Odd row -->
                            <tr class="{{ $loop->even?'bg-gray-50':'bg-white' }}">
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900">
                                    {{ $user->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    {{ $user->email }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    @forelse($user->orders() as $order)
                                        <div>{{ $order->course->name }}</div>
                                    @empty
                                        -
                                    @endforelse
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    {{ $user->created_at }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                    <x-forms.button href="{{ route('user-order-create',$user->id) }}" format="white" size="xs"><i class="fad fa-edit mr-2"></i> Add Order</x-forms.button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-cool-gray-200 sm:px-6">
                        <div class="hidden sm:block">
                            <p class="text-sm leading-5 text-cool-gray-700">
                                Showing
                                <span class="font-medium">1</span>
                                to
                                <span class="font-medium">{{ $users->count() }}</span>
                                of
                                <span class="font-medium">{{ $users->count() }}</span>
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