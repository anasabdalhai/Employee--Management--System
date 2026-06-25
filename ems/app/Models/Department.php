<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name', 'description', 'manager_id'];
protected static function boot()
    {
        parent::boot();

        static::creating(function ($department) {
            if (empty($department->description)) {
                $department->description = ' '; // وضع مسافة فارغة كقيمة افتراضية
            }
        });
    }
    // العلاقة: القسم له موظفون كثيرون
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public static function rules(){
        return[
            'name'=>'required|min:2',
       
        ];
    }
}