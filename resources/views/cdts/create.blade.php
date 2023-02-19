@extends('layouts.app2')

@section('content')
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Create</h1>
    </div>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
        <!-- Replace with your content -->
        <div class="py-4">

            <form action="{{ route('cdts.store') }}" method="POST" class="space-y-8 divide-y divide-gray-200">
                @csrf
                <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">

                    <div class="space-y-6 pt-8 sm:space-y-5 sm:pt-10">
                        <div>
                            <h3 class="text-lg font-medium leading-6 text-gray-900">CDT Information</h3>
                            {{--<p class="mt-1 max-w-2xl text-sm text-gray-500">Use a permanent address where you can receive mail.</p>--}}
                        </div>
                        <div class="space-y-6 sm:space-y-5">
                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="minimum-amount" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Minimum Amount</label>
                                <div class="mt-1 sm:col-span-2 sm:mt-0">
                                    <input type="text" name="minimum_amount" id="minimum-amount" x-mask:dynamic="$money($input)" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="maximum-amount" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Maximum Amount</label>
                                <div class="mt-1 sm:col-span-2 sm:mt-0">
                                    <input type="text" name="maximum_amount" id="maximum-amount" x-mask:dynamic="$money($input)" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="minimum-days" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Minimum Days</label>
                                <div class="mt-1 sm:col-span-2 sm:mt-0">
                                    <input type="number" min="0" name="minimum_days" id="minimum-days" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                            </div>

                            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="maximum-days" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Maximum Days</label>
                                <div class="mt-1 sm:col-span-2 sm:mt-0">
                                    <input type="number" min="0" name="maximum_days" id="maximum-days" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="pt-5">
                    <div class="flex justify-end">
                        <button type="button"
                                class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Cancel
                        </button>
                        <button type="submit"
                                class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Save
                        </button>
                    </div>
                </div>
            </form>

        </div>
        <!-- /End replace -->
    </div>
@endsection