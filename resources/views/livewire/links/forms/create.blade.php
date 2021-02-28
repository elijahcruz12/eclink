<form class="space-y-8 divide-y divide-gray-200" wire:submit.prevent="submit">
    <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
        <div>



            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:py-5">
                <label for="first_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:py-2">
                    Title
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="text" name="first_name" wire:model="title" id="first_name" autocomplete="given-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                </div>
                @error('title') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:py-5">
                <label for="first_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                    URL
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="text" name="first_name" wire:model="url" id="first_name" autocomplete="given-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                </div>
                @error('url') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:py-5">
                <label for="first_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                    Custom Slug
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <input type="checkbox" wire:model="customSlug" name="first_name" id="first_name" autocomplete="given-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>
@if($customSlug == 1)
            <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="username" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                        Slug
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg flex rounded-md shadow-sm">
              <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                {{ url('l') }}
              </span>
                            <input type="text" name="username" wire:model="custom" id="username" autocomplete="username" class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                        </div>
                    </div>
                </div>
                @error('slug') <span class="error">{{ $message }}</span> @enderror
                @error('custom') <span class="error">{{ $message }}</span> @enderror
            </div>
@endif
        </div>


    </div>

    <div class="pt-5">
        <div class="flex justify-end">
            <a href="{{ route('links') }}" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Cancel
            </a>
            <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
            </button>
        </div>
    </div>
</form>
