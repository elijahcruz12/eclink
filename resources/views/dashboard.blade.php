<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>@if(date('A') == 'AM')Good Morning @else Good Afternoon @endif {{ strtok(Auth::user()->name, ' ') }}.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="block sm:flex sm:gap-x-5">
                <div class="rounded-md flex-1 flex bg-white px-4 py-4 my-2 sm:my-0">
                    <div class="flex-shrink">
                        <!-- Heroicon name: link -->
                        <svg class="rounded-full h-20 w-20 p-5 bg-indigo-600 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                        </svg>
                    </div>
                    <div class="flex-grow text-right">
                        <p class="text-2xl text-gray-600">Links</p>
                        <p class="text-3xl text-gray-900">{{ Auth::user()->links()->count() }}</p>
                    </div>
                </div>
                <div class="rounded-md flex-1 flex bg-white px-4 py-4 my-2 sm:my-0">
                    <div class="flex-shrink">
                        <!-- Heroicon name: cursor-click -->
                        <svg class="rounded-full h-20 w-20 p-5 bg-indigo-600 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                        </svg>
                    </div>
                    <div class="flex-grow text-right">
                        <p class="text-2xl text-gray-600">Total Clicks</p>
                        <p class="text-3xl text-gray-900">0</p>
                    </div>
                </div>
                <div class="rounded-md flex-1 flex bg-white px-4 py-4 my-2 sm:my-0">
                    <div class="flex-shrink">
                        <!-- Heroicon name: cursor-click -->
                        <svg class="rounded-full h-20 w-20 p-5 bg-indigo-600 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                        </svg>
                    </div>
                    <div class="flex-grow text-right">
                        <p class="text-2xl text-gray-600">Todays Clicks</p>
                        <p class="text-3xl text-gray-900">0</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
