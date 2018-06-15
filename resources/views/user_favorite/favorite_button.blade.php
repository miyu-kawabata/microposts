    @if (Auth::user()->is_liking($micropost->id))
        {!! Form::open(['route' => ['microposts.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-default btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['microposts.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-warning btn-xs"]) !!}
        {!! Form::close() !!}
    @endif