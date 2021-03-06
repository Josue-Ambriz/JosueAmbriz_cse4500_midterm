@extends('adminlte::page')

@section('title', 'User Information')

@section('content_header')
    <h1>User Information</h1>
@stop

@section('content')
    <h2>{{ $userinfo->title; }}</h2>
    <div><p>{{ $userinfo->first_name; }}</p></div>
    <div><p>{{ $userinfo->last_name; }}</p></div>
    <div><p>{{ $userinfo->email; }}</p></div>
    <div><p>{{ $userinfo->phone; }}</p></div>
    
    <h4>
        <div>
            <a href="{{route('usersinfos.edit', ['usersinfo'=>$userinfo->id]) }}" class="btn btn-primary" >Edit</a>
            @csrf
            <form style="display:inline;" class="delete" action="{{route('usersinfos.destroy', ['usersinfo'=>$userinfo->id])}}" method="post">
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
            @csrf
            </form>
        </div>
    </h4>
@stop
