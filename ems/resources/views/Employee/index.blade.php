<x-app-layout>
    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h2 class="mb-0">قائمة الموظفين</h2>
                <a href="{{ route('employees.create') }}" class="btn btn-light">إضافة موظف جديد</a>
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-right" dir="rtl">
                        <thead class="table-dark">
                            <tr>
                                <th>الرقم الوظيفي</th>
                                <th>الاسم</th>
                                <th>القسم</th>
                                <th>المنصب</th>
                                <th>البريد</th>
                                <th>الحالة</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($employees as $employee)
                            <tr>
                                <td>{{ $employee->employee_id }}</td>
                                <td>{{ $employee->name }}</td>
                                {{-- تم تصحيح استدعاء القسم هنا --}}
                                <td>{{ $employee->department ? $employee->department->name : 'غير محدد' }}</td>
                                <td>{{ $employee->position }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>
                                    <span class="badge {{ $employee->status == 'active' ? 'bg-success' : 'bg-secondary' }}">
                                        {{ $employee->status }}
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-sm btn-info text-white">عرض</a>
                                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-sm btn-warning">تعديل</a>
                                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                                            @csrf 
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد من الحذف؟')">حذف</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">لا توجد بيانات موظفين حالياً.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>