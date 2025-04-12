<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} - Bienvenido {{ Auth::user()->username }}
        </h2>
    </x-slot>

    <div class="py-4 max-w-4xl mx-auto">
        <form method="POST" action="{{ route('tweet.store') }}">
            @csrf
            <textarea name="content" maxlength="280" required placeholder="Escribe tu tweet..." class="w-full p-2 border rounded mb-2"></textarea>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Tweetear</button>
        </form>


        <h3 class="text-lg font-semibold mb-4">Tweets recientes</h3>
        @foreach($tweets as $tweet)
        <div class="p-4 bg-white rounded shadow mb-4">
            <p class="text-gray-800"><strong>{{ $tweet->user->username }}:</strong> {{ $tweet->content }}</p>
            <p class="text-sm text-gray-500">{{ $tweet->created_at->diffForHumans() }}</p>
        </div>
        @endforeach
    </div>
</x-app-layout>
