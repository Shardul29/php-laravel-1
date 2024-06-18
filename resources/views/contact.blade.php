@extends('layouts.app')


@section('content')
<h1>This is the contact page </h1>

@if($people)
    <ul>
    @foreach($people as $person)
    <li> {{$person}}</li>
    @endforeach
    <ul>
@endif
@endsection