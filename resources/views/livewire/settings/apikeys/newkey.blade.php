
<div class="bg-white overflow-hidden shadow rounded-lg my-4">
    <div class="px-4 pt-5 sm:pt-6">
        <p class="text-2xl">
            New Api Key
        </p>
        <form wire:submit.prevent="submit" class="flex space-x-2">
            <div class="flex-1 p-1">
                <div>
                    <input type="text" wire:model="tokenName" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md mr-1" placeholder="My token name">
                </div>
            </div>


            <button type="submit" class="px-4 py-2 rounded-md bg-indigo-600 text-gray-100 flex-none">
                Submit
            </button>
        </form>
    </div>

    @if($tokenCreated)

        <div class="mt-1 px-4 pb-5 sm:pb-6">
            <p class="text-xl">
                New Api Key Created!
            </p>
            <div class="flex gap-2">
                <p>Your api key:</p>
                <input type="text" readonly class="rounded-md bg-gray-400 flex-1" value="{{ $plainTextToken }}">
            </div>

        </div>

    @endif
</div>
