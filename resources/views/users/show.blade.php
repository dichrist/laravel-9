@extends('layouts.app')

@section('title', 'Dados do usuário')

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">Listagem do usuário {{ $user->name }}</h1>

    <p>user id: {{ $user->id }}</p>
    <p>user name: {{ $user->name }}</p>
    <p>user email: {{ $user->email }}</p>

    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf 
        @method('DELETE')
        <button type="submit" class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Deletar</button>
    </form>
    

@endsection