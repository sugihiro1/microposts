@if (Auth::id() != $user->id)
    @if (Auth::user()->is_favoring($micropost->id))
        {!! Form::open(['route' => ['micropost.unfavor', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['micropost.favor', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-info btn-xs"]) !!}
        {!! Form::close() !!}
    @endif
@endif            

