<x-app-layout>
    @push('bottom')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
        <script>
            new ClipboardJS('.clipjs');
        </script>
    @endpush

    <x-slot name="header">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Links
                </h2>
            </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                <a href="{{ route('links.create') }}" class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    New
                </a>
            </div>
        </div>

    </x-slot>

        @if(Auth()->user()->links()->count() != 0)

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-3">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Tiny Url
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Real Url
                                </th>

                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Todays Clicks
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Total Clicks
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach(Auth()->user()->links()->get() as $link)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $link->title }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <div class="relative flex focus-within:z-10">
                                                <input type="text" name="nouse" id="clip{{ $link->id }}" readonly class="focus:ring-indigo-500 focus:border-indigo-500 block w-full rounded-none rounded-l-md sm:text-sm border-gray-300" value="{{ url( config('eclink.suffix') . '/' . $link->slug ) }}">
                                            </div>
                                            <button class="-ml-px clipjs relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500" data-clipboard-target="#clip{{ $link->id }}">
                                                <!-- Heroicon name: clipboard-copy -->
                                                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path d="M8 2a1 1 0 000 2h2a1 1 0 100-2H8z" />
                                                    <path d="M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293-1.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L10.414 13H15v3a2 2 0 01-2 2H5a2 2 0 01-2-2V5zM15 11h2a1 1 0 110 2h-2v-2z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $link->url }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @php
                                    $carbon = \Illuminate\Support\Carbon::now();
                                    @endphp
                                    @if(\Illuminate\Support\Facades\Redis::zscore('link.'.$link->slug, $carbon->year . $carbon->month . $carbon->day) != null)
                                        {{ \Illuminate\Support\Facades\Redis::zscore('link.'.$link->slug, $carbon->year . $carbon->month . $carbon->day) }}
                                    @else
                                        0
                                    @endif
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    @if(\Illuminate\Support\Facades\Redis::zscore('link.clicks', $link->slug) != null)
                                        {{ \Illuminate\Support\Facades\Redis::zscore('link.clicks', $link->slug) }}
                                    @else
                                        0
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">View</a><br>
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a><br>
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
        @else
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-3">
                <p class="text-lg">You do not have any links. Create one to be able to see your links.</p>
            </div>

    @endif

</x-app-layout>
