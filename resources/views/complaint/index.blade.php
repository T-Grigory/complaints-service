@extends('layouts.app')

@section('content')
    <table class="table me-2">
        <thead>
            <tr>
                <th>Обращение</th>
                <th>Фамилия Имя Отчество</th>
                <th>Повод</th>
                <th>Дата</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($complaints as $complaint)
                <tr class="align-middle">
                    <td>№ {{$complaint->id}}</td>
                    <td>{{$complaint->fullname}}</td>
                    <td>{{$complaint->reason->name}}</td>
                    <td>{{$complaint->created_at->format('d.m.Y')}}</td>
                    <td><a  class="btn btn-secondary" href="{{route('complaints.show', $complaint)}}">Посмотреть обращение</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
