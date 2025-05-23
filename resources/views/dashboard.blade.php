<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 leading-tight">
            Task Dashboard
        </h2>
    </x-slot>

    <div class="py-6 px-4">
        @if (session('success'))
            <div 
                x-data="{ show: true }" 
                x-init="setTimeout(() => show = false, 5000)" 
                x-show="show"
                x-transition
                class="mb-4 p-3 bg-green-100 border border-green-400 text-green-700 rounded"
            >
                {{ session('success') }}
            </div>
        @endif
        <div class="mb-6">
            <a href="{{ route('tasks.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + Create New Task
            </a>
        </div>
        @php
            $totalTasks = $tasks->count();
            $doneTasks = $tasks->where('status', 'Done')->count();
            $progressPercent = $totalTasks > 0 ? ($doneTasks / $totalTasks) * 100 : 0;
        @endphp

        <div class="mb-6">
            <p class="text-sm font-semibold mb-2 text-white">
                Tasks Completed: {{ $doneTasks }} / {{ $totalTasks }}
            </p>
            <div class="w-full bg-gray-300 rounded h-4">
                <div class="bg-green-500 h-4 rounded" style="width: {{ $progressPercent }}%;"></div>
            </div>
        </div>
        <form method="GET" action="{{ route('dashboard') }}" class="mb-6">
            <label for="search" class="sr-only">Search Tasks</label>
            <div class="relative max-w-md mx-auto">
                <input
                    type="text"
                    id="search"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Search tasks..."
                    class="block w-full pl-10 pr-4 py-2 rounded-md shadow-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                    autocomplete="off"
                />
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 103 10.5a7.5 7.5 0 0013.65 6.15z" />
                    </svg>
                </div>
            </div>
        </form>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            @php
                $columnColors = [
                    'To Do' => 'bg-blue-100',
                    'In Progress' => 'bg-yellow-100',
                    'Done' => 'bg-green-100',
                ];
            @endphp

            @foreach (['To Do', 'In Progress', 'Done'] as $status)
                <div class="shadow-md rounded p-4 {{ $columnColors[$status] }}">
                    <h3 class="text-lg font-bold mb-4 text-gray-800">{{ $status }}</h3>

                    @foreach ($tasks->where('status', $status) as $task)
                        <div class="bg-gray-200 p-3 rounded mb-2 transition duration-200 hover:shadow-lg hover:bg-gray-300">
                            <span class="inline-block text-xs text-gray-500 mb-1">
                                @if ($task->status == 'To Do') 🕒 To Do
                                @elseif ($task->status == 'In Progress') 🔧 In Progress
                                @else ✅ Done
                                @endif
                            </span>
                            <h4 class="font-semibold text-gray-900">{{ $task->title }}</h4>
                            <p class="text-sm text-gray-800">{{ $task->description }}</p>
                            <p class="text-xs text-gray-500 mt-1">Created {{ $task->created_at->diffForHumans() }}</p>
                            <p class="text-xs text-gray-500 mt-1">Assigned to: {{ $task->user->name ?? 'Unknown' }}</p>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this task?');" class="mt-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 text-sm">
                                    Delete
                                </button>
                            </form>
                        </div>
                    @endforeach

                </div>
            @endforeach

        </div>
        <div class="mt-6">
            {{ $tasks->links() }}
        </div>
    </div>
</x-app-layout>
