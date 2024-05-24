<div class="max-w-md mx-auto p-6 bg-gray-800 rounded-lg shadow-xl">
    <h3 class="text-xl text-gray-300 mb-4">Available Games</h3>
    <ul class="divide-y divide-gray-600">
        @foreach($games as $game)
        <li class="py-2">
            <a href="{{$game->url}}" class="block hover:bg-gray-700 px-4 py-2 rounded-md transition duration-200">
                <span class="text-blue-500">{{ $game->title }}</span>
            </a>
        </li>
        @endforeach
    </ul>
</div>
