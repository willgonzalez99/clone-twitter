<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Perfil de {{ $user->username }}
        </h2>
    </x-slot>

    <div class="py-4 max-w-4xl mx-auto">
        @if(Auth::id() !== $user->id)
        @if(Auth::user()->isFollowing($user))
        <p class="mb-4 text-green-600">Ya estás siguiendo a {{ $user->username }}</p>
        @else
        <form method="POST" action="{{ route('follow', $user) }}">
            @csrf
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Seguir</button>
        </form>
        @endif
        @endif

        <h3 class="text-lg font-semibold mt-6 mb-4">Tweets de {{ $user->username }}</h3>
        @foreach($user->tweets as $tweet)
        <div class="p-4 bg-white rounded shadow mb-4">
            <p class="text-gray-800">{{ $tweet->content }}</p>
            <p class="text-sm text-gray-500">{{ $tweet->created_at->diffForHumans() }}</p>
        </div>
        @endforeach
    </div>
</x-app-layout>
