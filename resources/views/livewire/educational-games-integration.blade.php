<div> 
    <h3 class="text-gray-50">Available Games</h3> 
    <ul class="text-gray-50"> 
        @foreach($games as $game) 
            <a href="{{$game->url}}"><li>{{ $game->title }}</li> </a> 
        @endforeach 
    </ul> 

</div> 