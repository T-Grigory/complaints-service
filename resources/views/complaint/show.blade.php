@extends('layouts.app')

@section('content')
    <p> Обращение №{{$complaint->id}}</p>
    <p>ФИО: {{$complaint->fullname}}</p>
    <p>Телефон: {{$complaint->phone}}</p>
    <p>Поликлиника: {{$complaint->polyclinic->name}}</p>
    <p>Повод: {{$complaint->reason->name}}</p>
    <p>Обращение: {{$complaint->text}}</p>
@endsection
