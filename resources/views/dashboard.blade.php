<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-100 p-6">
        <div class="max-w-7xl mx-auto">

            <h1 class="text-2xl font-bold mb-6 text-center">{{ __("Services") }}</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                <!-- Card 1 -->
                <a href="{{ route('expenses.index') }}" class="text-blue-500 hover:none">
                <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">

                    <div class="p-4 flex-grow">

                        <h2 class="text-lg font-semibold">{{ __("Expense") }}</h2>

                        <p class="text-gray-600">This is a description for Expense. It provides some information about the link.</p>

                    </div>
                </div>
                </a>

                <!-- Card 2 -->

                <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">

                    <div class="p-4 flex-grow">

                        <h2 class="text-lg font-semibold">Card Title 2</h2>

                        <p class="text-gray-600">This is a description for Card 2. It provides some information about the link.</p>

                    </div>

                    <div class="p-4">

                        <a href="#" class="text-blue-500 hover:underline">Learn More</a>

                    </div>

                </div>


                <!-- Card 3 -->

                <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">

                    <div class="p-4 flex-grow">

                        <h2 class="text-lg font-semibold">Card Title 3</h2>

                        <p class="text-gray-600">This is a description for Card 3. It provides some information about the link.</p>

                    </div>

                    <div class="p-4">

                        <a href="#" class="text-blue-500 hover:underline">Learn More</a>

                    </div>

                </div>


                <!-- Card 4 -->

                <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">

                    <div class="p-4 flex-grow">

                        <h2 class="text-lg font-semibold">Card Title 4</h2>

                        <p class="text-gray-600">This is a description for Card 4. It provides some information about the link.</p>

                    </div>

                    <div class="p-4">

                        <a href="#" class="text-blue-500 hover:underline">Learn More</a>

                    </div>

                </div>

            </div>

        </div>
    </div>
</x-app-layout>
