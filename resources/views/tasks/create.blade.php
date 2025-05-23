<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                @if($errors->any())
                    <div class="mb-4 text-red-600">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label>Title</label>
                        <input type="text" name="title" class="w-full p-2 rounded border text-black bg-white" required>
                    </div>

                    <div class="mb-4">
                        <label>Description</label>
                        <textarea name="description" class="w-full p-2 rounded border text-black bg-white"></textarea>
                    </div>

                    <div class="mb-4">
                        <label>Status</label>
                        <select name="status" class="w-full p-2 rounded border text-black bg-white">
                            <option value="To Do">To do</option>
                            <option value="In Progress">In Progress</option>
                            <option value="Done">Done</option>
                        </select>
                    </div>

                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>