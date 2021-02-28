<x-app-layout>

    <x-slot name="header">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Api Keys
                </h2>
            </div>
        </div>

    </x-slot>

    <livewire:settings.apikeys.listkeys />

</x-app-layout>
