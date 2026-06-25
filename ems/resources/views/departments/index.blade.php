@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold text-primary">إدارة الأقسام</h2>
            <p class="text-muted">نظرة عامة على الأقسام وعدد الموظفين في كل قسم</p>
        </div>
        <a href="{{ route('departments.create') }}" class="btn btn-success shadow-sm px-4">
            <i class="fas fa-plus-circle me-2"></i> إضافة قسم جديد
        </a>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th class="ps-4">اسم القسم</th>
                            <th class="text-center">عدد الموظفين</th>
                            <th class="text-center">العمليات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($departments as $department)
                        <tr>
                            <td class="ps-4 fw-bold">{{ $department->name }}</td>
                            <td class="text-center">
                                <span class="badge bg-primary rounded-pill px-3">
                                    {{ $department->employees_count }} موظف
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-sm btn-outline-warning" title="تعديل">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('departments.destroy', $department->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="حذف" onclick="return confirm('هل أنت متأكد من حذف هذا القسم؟')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center py-5 text-muted">
                                <i class="fas fa-folder-open fa-2x d-block mb-2"></i> لا توجد أقسام مضافة حالياً
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection