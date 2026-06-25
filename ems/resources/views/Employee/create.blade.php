@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">إضافة موظف جديد</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('employees.store') }}" method="POST">
                    @csrf 
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">الرقم الوظيفي</label>
                            <input type="text" name="employee_id" class="form-control" value="{{ old('employee_id') }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">الاسم الكامل</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">القسم</label>
                            <input type="text" name="department" class="form-control" value="{{ old('department') }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">المنصب</label>
                            <input type="text" name="position" class="form-control" value="{{ old('position') }}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">البريد الإلكتروني</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">كلمة المرور</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">الحالة</label>
                        <select name="status" class="form-select">
                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>نشط</option>
                            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>غير نشط</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-success px-4">حفظ البيانات</button>
                        <a href="{{ route('employees.index') }}" class="btn btn-secondary px-4">إلغاء</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection