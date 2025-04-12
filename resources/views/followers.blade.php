<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold text-gray-800">Seguidores de {{ $user->username }}</h2>
    </x-slot>

    <div class="max-w-4xl mx-auto py-6">
        @foreach($followers as $follower)
        <div class="flex justify-between items-center p-2 bg-white rounded shadow mb-2">
            <p>{{ $follower->name }} ({{ $follower->username }})</p>
            <form method="POST" action="{{ route('follow', $follower->id) }}">
                @csrf
                <button class="text-blue-600">Seguir</button>
            </form>
        </div>
        @endforeach
    </div>
</x-app-layout>
