@extends('layouts.app')

@section('title', '| Editar Tarefa')

<form action="/todos/{{$todo->id}}" method="PUT">
    <input type="text" placeholder="{{$todo->title}}">
</form>