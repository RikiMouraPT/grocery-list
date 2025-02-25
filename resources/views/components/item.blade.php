<div class="flex justify-center">
    <div
        class="flex items-center bg-gray-100 text-gray-400 w-full sm:w-10/12 md:w-8/12 lg:w-7/12 rounded-xl shadow-md p-4 space-x-2 cursor-pointer"
        onclick="toggleItem({{ $item->id }})"
    >
        <p id="itemName-{{ $item->id }}" class="p-2 text-gray-400 flex-grow bg-gray-100">
            {{ $item->name }}
        </p>
        <p id="itemQuantity-{{ $item->id }}" class="p-2 text-gray-400 w-[5ch] bg-gray-100 text-center">
            {{ $item->quantity }}
        </p>
        <form action="{{ route('delete-item', $item->id) }}" method="POST" class="flex justify-center items-center ml-2">
            @csrf
            @method('DELETE')
            <button
                type="submit"
                class="p-2 bg-red-500 text-white rounded-xl hover:bg-red-600"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </form>
    </div>
</div>
