@extends('layouts.app')

@section('content')
    <?php $show_favor_button = false; ?>
    @include('users.users', ['users' => $users, 'show_favor_button'=> $show_favor_button])
@endsection
