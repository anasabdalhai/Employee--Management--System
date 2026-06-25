<x-app-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-info text-white text-center py-3">
                        <h4 class="mb-0">تفاصيل الموظف: {{ $employee->name }}</h4>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>الرقم الوظيفي:</strong> {{ $employee->employee_id }}</li>
                            <li class="list-group-item"><strong>الاسم الكامل:</strong> {{ $employee->name }}</li>
                            <li class="list-group-item"><strong>القسم:</strong> {{ $employee->department }}</li>
                            <li class="list-group-item"><strong>المسمى الوظيفي:</strong> {{ $employee->position }}</li>
                            <li class="list-group-item"><strong>البريد الإلكتروني:</strong> {{ $employee->email }}</li>
                            <li class="list-group-item"><strong>الحالة:</strong> 
                                <span class="badge {{ $employee->status == 'active' ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $employee->status }}
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer text-center bg-white border-0 py-3">
                        <a href="{{ route('employees.index') }}" class="btn btn-outline-primary px-4">عودة للقائمة</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>