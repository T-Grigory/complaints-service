@extends('layouts.app')

@section('content')
    @if(Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error')}}
        </div>
    @endif
    <h1 class="mb-5">Форма отправки обращения</h1>
    {{ Form::model($complaint, ['route' => 'complaints.store', 'class' => 'w-50']) }}
    @include('complaint.form')
    {{ Form::submit('Создать', ['class' => 'btn btn-primary mt-3']) }}
    {{ Form::close() }}
@endsection
