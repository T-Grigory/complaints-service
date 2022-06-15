@extends('layouts.app')

@section('content')
    <p> Обращение №{{$complaint->id}}</p>
    <p>ФИО: {{$complaint->client->fullname}}</p>
    <p>Телефон: {{$complaint->client->phone}}</p>
    <p>Поликлиника: {{$complaint->polyclinic->name}}</p>
    <p>Повод: {{$complaint->reason->name}}</p>
    <p>Обращение: {{$complaint->text}}</p>
@endsection
