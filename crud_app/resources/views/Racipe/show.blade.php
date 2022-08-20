@extends('Layouts.layout')
@section('body')
    HEllOOOPHPPDP
    <h4>NAME:</h4>
    {{$rcipe->name}}
    <h4>INstruction</h4>
    {{$rcipe->instruction}}
    <h4>Description</h4>
    {{$rcipe->description}}
    <ul>
        @foreach($ingredients as $ingradient)
            <li>{{$ingradient->name}}</li>
        @endforeach
    </ul>
@endsection