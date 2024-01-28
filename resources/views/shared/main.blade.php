@extends('layouts.welcome')

@section('main')
 @foreach ($comics as $comic )
 {{$comic['title']}}
     
 @endforeach
@endsection