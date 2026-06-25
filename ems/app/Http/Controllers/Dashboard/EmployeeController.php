<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Requests\StoreEmployeeRequest; 
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // عرض قائمة الموظفين
    public function index()
    {
        $employees = Employee::all();
        return view('Employee.index', compact('employees'));
    }

    // عرض صفحة إضافة موظف جديد
    public function create()
    {
        return view('Employee.create');
    }

    // حفظ الموظف الجديد في قاعدة البيانات
  public function store(StoreEmployeeRequest $request)
{
    // البيانات هنا أصبحت "مُتحقق منها" ومضمونة
    Employee::create($request->validated());
    
    return redirect()->route('employees.index')->with('success', 'تم إضافة الموظف بنجاح');
}

    // عرض تفاصيل موظف معين
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('Employee.show', compact('employee'));
    }

    // عرض صفحة التعديل
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('Employee.edit', compact('employee'));
    }

    // تحديث بيانات الموظف
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'تم تحديث بيانات الموظف');
    }

    // حذف موظف
    public function destroy($id)
    {
        Employee::findOrFail($id)->delete();
        return redirect()->route('employees.index')->with('success', 'تم حذف الموظف');
    }
}