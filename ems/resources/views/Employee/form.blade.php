<div class="card mb-4 border-0 shadow-sm">
    <div class="card-header bg-primary text-white">معلومات شخصية</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>الاسم</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $employee->name ?? '') }}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>تاريخ الميلاد</label>
                <input type="date" name="birth_date" class="form-control" value="{{ old('birth_date', $employee->birth_date ?? '') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label>الجنس</label>
                <select name="gender" class="form-select">
                    <option value="male">ذكر</option>
                    <option value="female">أنثى</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label>رقم الهاتف</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone', $employee->phone ?? '') }}">
            </div>
            <div class="col-md-4 mb-3">
                <label>العنوان</label>
                <input type="text" name="address" class="form-control" value="{{ old('address', $employee->address ?? '') }}">
            </div>
        </div>
    </div>
</div>

<div class="card mb-4 border-0 shadow-sm">
    <div class="card-header bg-secondary text-white">معلومات وظيفية</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3 mb-3">
                <label>الرقم الوظيفي</label>
                <input type="text" name="employee_id" class="form-control" value="{{ old('employee_id', $employee->employee_id ?? '') }}" required>
            </div>
            <div class="col-md-3 mb-3">
                <label>القسم</label>
                <input type="text" name="department" class="form-control" value="{{ old('department', $employee->department ?? '') }}">
            </div>
            <div class="col-md-3 mb-3">
                <label>المنصب</label>
                <input type="text" name="position" class="form-control" value="{{ old('position', $employee->position ?? '') }}">
            </div>
            <div class="col-md-3 mb-3">
                <label>تاريخ التوظيف</label>
                <input type="date" name="hire_date" class="form-control" value="{{ old('hire_date', $employee->hire_date ?? '') }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>الراتب</label>
                <input type="number" name="salary" class="form-control" value="{{ old('salary', $employee->salary ?? '') }}">
            </div>
        </div>
    </div>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-header bg-dark text-white">معلومات الحساب</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 mb-3">
                <label>البريد الإلكتروني</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $employee->email ?? '') }}">
            </div>
            <div class="col-md-4 mb-3">
                <label>كلمة المرور</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="col-md-4 mb-3">
                <label>الدور</label>
                <input type="text" name="role" class="form-control" value="{{ old('role', $employee->role ?? '') }}">
            </div>
        </div>
    </div>
</div>