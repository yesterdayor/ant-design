<x-layout>
    <x-slot name="title">
      {{ $title }}
    </x-slot>
    @foreach($tasks as $task)
        {{ $task }}
    @endforeach
</x-layout>
