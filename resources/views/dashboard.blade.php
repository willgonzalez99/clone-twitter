<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} - Bienvenido {{ Auth::user()->username }}
        </h2>
    </x-slot>

    <div class="py-4 max-w-4xl mx-auto">
        <!-- Formulario de búsqueda de usuarios -->
        <form method="GET" action="{{ route('search.user') }}" class="mb-6 flex">
            <input type="text" name="username" placeholder="Buscar usuario..." required class="flex-1 p-2 border rounded-l">
            <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded-r hover:bg-gray-900">Buscar</button>
        </form>

        <!-- Formulario de publicación de tweet -->
        <form method="POST" action="{{ route('tweet.store') }}">
            @csrf
            <textarea name="content" maxlength="280" required placeholder="Escribe tu tweet..." class="w-full p-2 border rounded mb-2"></textarea>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Tweetear</button>
        </form>

        <h3 class="text-lg font-semibold mb-4">Tweets recientes</h3>
        @foreach($tweets as $tweet)
        <div class="p-4 bg-white rounded shadow mb-4">
            <p class="text-gray-800">
                <strong>
                    <a href="{{ route('profile', $tweet->user) }}" class="text-blue-500 hover:underline">
                        {{ $tweet->user->username }}
                    </a>:
                </strong> {{ $tweet->content }}
            </p>
            <p class="text-sm text-gray-500">{{ $tweet->created_at->diffForHumans() }}</p>
        </div>
        @endforeach
    </div>
</x-app-layout>
