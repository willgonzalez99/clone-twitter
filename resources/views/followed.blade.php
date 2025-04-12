<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold text-gray-800">Siguiendo - {{ $user->username }}</h2>
    </x-slot>

    <div class="max-w-4xl mx-auto py-6">
        @foreach($followed as $follow)
        <div class="p-2 bg-white rounded shadow mb-2">
            <p>{{ $follow->name }} ({{ $follow->username }})</p>
        </div>
        @endforeach
    </div>
</x-app-layout>
