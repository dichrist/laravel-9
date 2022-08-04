@extends('layouts.app')

@section('title', 'Dados do usuário')

@section('content')

    <p>user id: {{ $user->id }}</p>
    <p>user name: {{ $user->name }}</p>
    <p>user email: {{ $user->email }}</p>

    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf 
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>
    

@endsection