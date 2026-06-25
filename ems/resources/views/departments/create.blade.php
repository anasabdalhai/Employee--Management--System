@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm col-md-6 mx-auto">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">إضافة قسم جديد</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('departments.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">اسم القسم</label>
                    <input type="text" name="name" class="form-control" required placeholder="مثال: الموارد البشرية">
                </div>
                <div class="mb-3">
                    <label class="form-label">وصف القسم</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-success">حفظ القسم</button>
                <a href="{{ route('employees.index') }}" class="btn btn-secondary">إلغاء</a>
            </form>
        </div>
    </div>
</div>
@endsection