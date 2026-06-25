<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // قمت بإضافة كافة الحقول التي أنشأناها في الـ Migration
    protected $fillable = [
        'name', 
        'birth_date', 
        'gender', 
        'phone', 
        'address',
        'employee_id', 
        'department_id', 
        'position', 
        'hire_date', 
        'salary', 
        'email', 
        'password', 
        'role', 
        'status'
    ];

    // إخفاء كلمة المرور حتى لا تظهر بالخطأ عند عرض بيانات الموظف
    protected $hidden = [
        'password',
    ];
    
}