<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grocery List</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="font-mono">
<div class="space-y-4 items-center justify-center min-h-screen ">
    <div class="flex items-center justify-center text-4xl mb-8">
        <h1>Grocery List</h1>
    </div>
    <form action="{{ route('reset-list') }}" method="POST">
        @csrf
        <button
            id="resetList"
            type="submit"
            class="absolute top-4 right-4 p-2 rounded-xl bg-red-500 text-white hover:bg-red-600"
        >
            Reset List
        </button>
    </form>

    <!-- Add Item -->
    <div class="flex justify-center">
        <div class="flex bg-gray-100 text-gray-400 w-full sm:w-10/12 md:w-8/12 lg:w-7/12 rounded-xl shadow-md p-4">
            <form action="{{ route('add-item') }}" method="POST" class="flex w-full items-center space-x-2">
                @csrf
                <input
                    name="itemName"
                    type="text"
                    placeholder="Item..."
                    class="p-2 text-gray-400 flex-grow bg-gray-100"
                    required
                >
                <input
                    name="itemQuantity"
                    type="number"
                    min="0"
                    max="999"
                    placeholder="Qnt"
                    class="p-2 text-gray-400 w-[5ch] bg-gray-100
                    [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                    required
                >
                <button
                    type="submit"
                    class="p-2 bg-green-500 text-white rounded-xl hover:bg-green-600"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </form>
        </div>
    </div>

    <!-- Items List -->
    <div class="space-y-4">
        {{ $slot }}
    </div>
</div>
</body>
</html>
