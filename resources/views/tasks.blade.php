<x-layout>
    <x-slot:title>
        Todo Title
        </x-slot:title>
    @foreach ($tasks as $task)
            {{$task['name']}}
    @endforeach
</x-layout>
