<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold text-gray-800">Perfil de {{ $user->username }}</h2>
    </x-slot>

    <div class="max-w-4xl mx-auto py-6 space-y-4">
        <div class="bg-white p-4 shadow rounded">
            <p><strong>Nombre completo:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Seguidores:</strong> {{ $user->followers()->count() }}</p>
            <p><strong>Siguiendo:</strong> {{ $user->follows()->count() }}</p>

            <form method="POST" action="{{ route('follow', $user->id) }}" class="mt-2">
                @csrf
                <button class="bg-blue-500 text-white px-4 py-2 rounded">Seguir</button>
            </form>
        </div>

        <div class="bg-white p-4 shadow rounded">
            <h3 class="font-bold mb-2">Tweets</h3>
            @foreach($user->tweets as $tweet)
            <div class="mb-2">
                <p>{{ $tweet->content }}</p>
                <p class="text-sm text-gray-500">{{ $tweet->created_at->diffForHumans() }}</p>
            </div>
            @endforeach
        </div>

        <div class="flex space-x-4">
            <a href="{{ route('followers', $user->id) }}" class="text-blue-600">Ver seguidores</a>
            <a href="{{ route('followed', $user->id) }}" class="text-blue-600">Ver seguidos</a>
            <a href="{{ route('dashboard') }}" class="text-blue-600">Volver al inicio</a>
        </div>
    </div>
</x-app-layout>
