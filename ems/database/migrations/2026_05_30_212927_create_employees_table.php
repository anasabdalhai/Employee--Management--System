<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            
            // معلومات شخصية
            $table->string('name');
            $table->date('birth_date')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            
            // معلومات وظيفية
            $table->string('employee_id')->unique(); // الرقم الوظيفي
            $table->string('department')->nullable();
            $table->string('position')->nullable();
            $table->date('hire_date')->nullable();
            $table->decimal('salary', 10, 2)->nullable(); // الراتب
            
            // معلومات الحساب
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('role')->default('employee'); // الدور
            $table->enum('status', ['active', 'inactive'])->default('active');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};