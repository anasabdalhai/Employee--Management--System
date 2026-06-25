<x-app-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-primary text-white text-center py-3">
                        <h4 class="mb-0">تعديل بيانات الموظف</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">الرقم الوظيفي</label>
                                    <input type="text" name="employee_id" class="form-control" value="{{ $employee->employee_id }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">الاسم الكامل</label>
                                    <input type="text" name="name" class="form-control" value="{{ $employee->name }}" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">القسم</label>
                                    <input type="text" name="department" class="form-control" value="{{ $employee->department }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">المسمى الوظيفي</label>
                                    <input type="text" name="position" class="form-control" value="{{ $employee->position }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">البريد الإلكتروني</label>
                                    <input type="email" name="email" class="form-control" value="{{ $employee->email }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">الحالة</label>
                                    <select name="status" class="form-select">
                                        <option value="active" {{ $employee->status == 'active' ? 'selected' : '' }}>نشط</option>
                                        <option value="inactive" {{ $employee->status == 'inactive' ? 'selected' : '' }}>غير نشط</option>
                                    </select>
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <a href="{{ route('employees.index') }}" class="btn btn-secondary px-4">إلغاء</a>
                                <button type="submit" class="btn btn-success px-4">حفظ التعديلات</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>