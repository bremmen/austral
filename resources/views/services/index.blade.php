<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Services') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        <a href="{{ route('services.create') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition duration-150 ease-in-out">Create New Service</a>
                    </div>
                    
                    <table class="w-full text-left table-auto mt-6">
                        <thead>
                            <tr>
                                <th class="py-2 border-b dark:border-gray-700 text-sm font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Icon</th>
                                <th class="py-2 border-b dark:border-gray-700 text-sm font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Title</th>
                                <th class="py-2 border-b dark:border-gray-700 text-sm font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Description</th>
                                <th class="py-2 border-b dark:border-gray-700 text-sm font-semibold text-gray-600 dark:text-gray-400 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                                <td class="py-3 border-b dark:border-gray-700 text-gray-500 dark:text-gray-400">
                                    <div class="w-6 h-6">{!! $service->icon !!}</div>
                                </td>
                                <td class="py-3 border-b dark:border-gray-700 font-medium">{{ $service->title }}</td>
                                <td class="py-3 border-b dark:border-gray-700 text-sm">{{ str($service->description)->limit(60) }}</td>
                                <td class="py-3 border-b dark:border-gray-700">
                                    <div class="flex space-x-3">
                                        <a href="{{ route('services.edit', $service) }}" class="text-blue-500 hover:text-blue-600 hover:underline">Edit</a>
                                        <form action="{{ route('services.destroy', $service) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-600 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
