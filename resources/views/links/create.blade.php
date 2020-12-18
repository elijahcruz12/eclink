<x-app-layout>

    <x-slot name="header">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    New Link
                </h2>
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <a href="{{ route('links') }}" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </a>
            </div>
        </div>

    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <livewire:links.forms.create />
    </div>

</x-app-layout>
