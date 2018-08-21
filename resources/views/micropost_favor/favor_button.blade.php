@if (Auth::id() != $user->id)
    @if (Auth::user()->is_favoring($user->id))
        {!! Form::open(['route' => ['user.unfavor', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.favor', $user->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-info btn-xs"]) !!}
        {!! Form::close() !!}
    @endif
@endif

