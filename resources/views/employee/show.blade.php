@extends('layouts.default')

@section('content')
    <h1>Информация о работнике</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <p><strong>ID:</strong> {{ $employee->id }}</p>
    <p><strong>Имя:</strong> {{ $employee->name }}</p>
    <p><strong>Email:</strong> {{ $employee->email }}</p>
    <p><strong>Должность:</strong> {{ $employee->position }}</p>
    <p><strong>Дата работы:</strong> {{ $employee->workData ?? 'Не указано' }}</p>

    <a href="{{ route('employee.index') }}" class="btn btn-primary">Добавить нового работника</a>
@endsection