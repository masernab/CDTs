@extends('layouts.app2')

@section('content')

    <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
        <!-- Replace with your content -->
        {{--<div class="py-4">
            @forelse($cdts as $cdt)

            @empty
                No CDTs
            @endforelse
        </div>--}}
        <div class="px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">CDTs</h1>
                    <p class="mt-2 text-sm text-gray-700">A list of all the cdts.</p>
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                    <a href="{{ route('cdts.create') }}" class="block rounded-md bg-indigo-600 py-1.5 px-3 text-center text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add</a>
                </div>
            </div>
            <div class="mt-8 flow-root">
                <div class="-my-2 -mx-6 overflow-x-auto lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead>
                            <tr>
                                <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Minimum Amount</th>
                                <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">maximum Amount</th>
                                <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">Minimum Days</th>
                                <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">Maximum Days</th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-6 sm:pr-0">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                            @forelse($cdts as $cdt)
                                <tr>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">{{ $cdt->minimum_amount }}</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">{{ $cdt->maximum_amount }}</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">{{ $cdt->minimum_days }}</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">{{ $cdt->maximum_days }}</td>
                                    <td class="relative whitespace-nowrap py-4 pl-3 pr-6 text-right text-sm font-medium sm:pr-0">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="whitespace-nowrap py-4 px-3 text-center text-sm text-gray-500">
                                        No CDTs
                                    </td>
                                </tr>
                            @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- /End replace -->
    </div>
@endsection