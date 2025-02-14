@extends('layouts.default')

@section('content')
    <h1>Добавить работника</h1>

    <form name="employee-form" id="employee-form" method="post" action="{{ route('employee.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="position">Должность</label>
            <input type="text" id="position" name="position" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="workData">Дата работы</label>
            <textarea name="workData" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="json_data">Данные в формате JSON</label>
            <textarea name="json_data" id="json_data" class="form-control" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@endsection