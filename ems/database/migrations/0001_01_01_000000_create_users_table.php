<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name', 100); // الاسم الكامل
    $table->string('email', 150)->unique(); // البريد الإلكتروني
    $table->string('password'); // كلمة المرور
    
    // معلومات إضافية من الصورة والمخطط
    $table->date('birth_date')->nullable(); // تاريخ الميلاد
    $table->enum('gender', ['male', 'female'])->nullable(); // الجنس
    $table->string('phone')->nullable(); // رقم الهاتف
    $table->string('address')->nullable(); // العنوان
    $table->date('hire_date')->nullable(); // تاريخ التوظيف
    $table->integer('experience')->nullable(); // الخبرة
    $table->decimal('salary', 10, 2)->nullable(); // الراتب
    
    // العلاقات (Foreign Keys)
    // $table->foreignId('role_id')->constrained()->onDelete('cascade'); // الدور
    // $table->foreignId('department_id')->constrained()->onDelete('cascade'); // القسم
    
    $table->enum('status', ['pending', 'approved'])->default('pending'); // الحالة
    
    $table->timestamps();
});

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
