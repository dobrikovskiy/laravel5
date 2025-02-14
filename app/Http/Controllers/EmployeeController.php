<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    // Метод для отображения формы
    public function index()
    {
        return view('employee.form'); // Возвращает view с формой
    }

    // Метод для обработки данных формы
    public function store(Request $request)
{
    // Валидация данных
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'position' => 'required|string|max:255',
        'workData' => 'nullable|string',
    ]);

    // Сохраняем данные в базу
    $employee = Employee::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'position' => $request->input('position'),
        'workData' => $request->input('workData'),
    ]);

    // Перенаправление на страницу с информацией о работнике
    return redirect()->route('employee.show', ['id' => $employee->id])->with('success', 'Данные успешно сохранены!');
}

    // Метод для отображения информации о работнике
    public function show($id)
{
    // Получаем данные о работнике из базы по ID
    $employee = Employee::find($id);

    if (!$employee) {
        return redirect()->route('employee.index')->with('error', 'Работник не найден!');
    }

    return view('employee.show', compact('employee'));
}

    public function update(Request $request, $id)
    {
        // Получаем JSON из запроса
        $jsonData = $request->input('json_data');
        $data = json_decode($jsonData, true);
    
        // Находим работника по ID
        $employee = Employee::find($id);
    
        if (!$employee) {
            return redirect()->route('employee.index')->with('error', 'Работник не найден!');
        }
    
        // Обновляем данные
        $employee->update([
            'name' => $data['name'] ?? $request->input('name'),
            'email' => $data['email'] ?? $request->input('email'),
            'position' => $data['position'] ?? $request->input('position'),
            'workData' => $data['workData'] ?? $request->input('workData'),
        ]);
    
        return redirect()->route('employee.show', ['id' => $employee->id])->with('success', 'Данные успешно обновлены!');
    }

protected function getPath(Request $request)
{
    return $request->path(); // Возвращает путь запроса (например, "store-form")
}

protected function getUrl(Request $request)
{
    return $request->url(); // Возвращает полный URL запроса (например, "http://example.com/store-form")
}

}